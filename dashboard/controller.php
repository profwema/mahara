<?php
include('db.php');

//variables
$msg='';
$wtr='';
$mark='';
$result='';
$trRow='';
//categories

// add category
if(isset($_POST['addcat']))
{   
  if (!isset($_SESSION['add-Cat']) || $_SESSION['add-Cat']!=$_POST['time'])
  {
    global $MySQL_Handle;
    $_SESSION['add-Cat'] = $_POST['time'];
    $parent_id  = legal_input($_POST['parent_id']);
    $name_ar    = legal_input($_POST['arName']);
    $name_en    = legal_input($_POST['enName']);
    $image_url  = legal_input($_POST['catPic']);
    $state      = $_POST['state'];




      $query=$MySQL_Handle->prepare("INSERT INTO categories (parent,name_en,name_ar, pic,state) VALUES (?,?,?,?,?)");
      $query->bind_param('isssi',$parent_id,$name_en,$name_ar,$image_url,$state);
      $exec= $query->execute();
      if($exec) 
      {
        $result='<div class="alert alert-success">تمت اضافة التصنيف بنجاح </div>';
      }
      else      
      {
        $result='<div class= "alert alert-danger">عفوا . حدث خطأ  </div>';
      }


  }
}


//update category
if(isset($_POST['editcat']))
{   
  $parent_id  = legal_input($_POST['parent_id']);
  $name_ar    = legal_input($_POST['arName']);
  $name_en    = legal_input($_POST['enName']);
  $image_url  = legal_input($_POST['catPic']);
  $state      = $_POST['state'];
  $id         = $_POST['cat_id'];
  
 
  if ($id!=$parent_id)
  {
    $query=$MySQL_Handle->prepare("UPDATE categories SET parent=?, name_en=?, name_ar=?, pic=?, state=? WHERE id =?");
    $query->bind_param('isssii',$parent_id,$name_en,$name_ar,$image_url,$state,$id);
    $exec= $query->execute();
    if($exec) 
    {
      $result='<div class="alert alert-success">تم تعديل التصنيف بنجاح </div>';
    }
    else      
    {
      $result='<div class= "alert alert-danger">عفوا . حدث خطأ  </div>';
    }
    
  }
  else
  {
    $result='<div class= "alert alert-danger">لا يمكن اختيار التصنيف ليكون هو التصنيف الأعلي </div>';
  }
}


if(isset($_GET['catDell']))
{
  $id  = $_GET['catDell'];
  $state =$_GET['state'];
  $stateUpdatable = checkCatContains($id,$state);
  if (!$stateUpdatable)
  {
    $exec=  dellRow($id,'categories');
    if($exec) 
    {
      @header('Location:categories.php');
    }
    else      
    {
      $result='<div class= "alert alert-danger">عفوا . حدث خطأ  </div>';
    }
  }
  else
  {
    $result='<div class= "alert alert-danger">التصنيف غير فارغ فلا يمكن حذفه </div>';
  }
} //echo $id;))



if(isset($_POST['addItem']))
{   
  if (!isset($_SESSION['add-Item']) || $_SESSION['add-Item']!=$_POST['time'])
  {
    global $MySQL_Handle;
    $_SESSION['add-Item'] = $_POST['time'];
    $parent_id  = legal_input($_POST['parent_id']);
    $name_ar    = legal_input($_POST['arName']);
    $name_en    = legal_input($_POST['enName']);
    $desc_ar    = legal_input($_POST['arDesc']);
    $desc_en    = legal_input($_POST['enDesc']);
    $model      = legal_input($_POST['model']);
    $size       = legal_input($_POST['size']);
    $sheet      = legal_input($_POST['sheet']);
    for($i=1;$i<=4;$i++)
    {
      $url[$i]  = legal_input($_POST['url'][$i]);   
    }
    
      $query=$MySQL_Handle->prepare("INSERT INTO `items`( `category`, `name_ar`, `name_en`, `desc_ar`, `desc_en`, `model`, `size`, `sheet`, `pic1`, `pic2`, `pic3`, `pic4`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
      $query->bind_param('isssssssssss',$parent_id,$name_ar,$name_en,$desc_ar,$desc_en,$model,$size,$sheet,$url[1],$url[2],$url[3],$url[4]);
      $exec= $query->execute();
      if($exec) 
      {
        $result='<div class="alert alert-success">تمت اضافة المنتج بنجاح </div>';
      }
      else      
      {
        $result='<div class= "alert alert-danger">عفوا . حدث خطأ  </div>';
      }
    }
    else
    {
        $result='<div class= "alert alert-danger">الصورة غير موجوده</div>';
    }
  
}


//update category
if(isset($_POST['editItem']))
{   
  $category   = legal_input($_POST['category']);
  $name_ar    = legal_input($_POST['arName']);
  $name_en    = legal_input($_POST['enName']);
  $desc_ar    = legal_input($_POST['arDesc']);
  $desc_en    = legal_input($_POST['enDesc']);
  $model      = legal_input($_POST['model']);
  $size       = legal_input($_POST['size']);
  $sheet      = legal_input($_POST['sheet']);
  $id         = $_POST['item_id'];
  for($i=1;$i<=4;$i++)
  {
    $url[$i]  = legal_input($_POST['url'][$i]);   
  }

  $query=$MySQL_Handle->prepare("UPDATE items SET category=?,
                                                  name_ar=?,  
                                                  name_en=?,
                                                  desc_ar=?,
                                                  desc_en=?,
                                                  model=?,
                                                  size=?,
                                                  sheet=?,
                                                  pic1=?,
                                                  pic2=?,
                                                  pic3=?,
                                                  pic4=?
                                            WHERE id=?");
  $query->bind_param('isssssssssssi',$category,$name_ar,$name_en,$desc_ar,$desc_en,$model,$size,$sheet,$url[1],$url[2],$url[3],$url[4],$id);
  $exec= $query->execute();
  if($exec) 
  {
    $result='<div class="alert alert-success">تم تعديل التصنيف بنجاح </div>';
  }
  else      
  {
    $result='<div class= "alert alert-danger">عفوا . حدث خطأ  </div>';
  }
}


if(isset($_GET['itemDell']))
{
  $id  = $_GET['itemDell'];
  $exec=  dellRow($id,'items');
  if($exec) 
  {
    $result='<div class="alert alert-success"> تم حذف المنتج بنجاح </div>';
  }
  else      
  {
    $result='<div class= "alert alert-danger">عفوا . حدث خطأ  </div>';
  }
  $_SESSION['dellCat']=$result;
  @header('Location:products.php');
} //echo $id;))



function catDataShow($parent_id,$path)
{  
   $trRow='';
	global $MySQL_Handle;
  $query = $MySQL_Handle->prepare('SELECT * FROM categories WHERE parent=?');
  $query->bind_param('i',$parent_id); 
  
	$query->execute();
	$exec=$query->get_result();
	if($exec->num_rows>0)
	{
		while($row= $exec->fetch_assoc())
		{
      $state = ($row['state']==1)?'<span class="mainCat">تصنيف رئيسي </span>':
                                  '<span class="subCat">تصنيف فرعي </span>';
      $trRow.=" <tr>
                  <td>".$path.$row['name_ar']."</td>
                  <td>".$state."</td>
                  <td>
                  <a href='category_update.php?pass=".$row['id']."' title='تعديل'><img src='assets/images/edit.png' alt='edit'></a>
                  <a href='categories.php?catDell=".$row['id']."&state=".$row['state']."' title='حذف'><img src='assets/images/del.png' alt='del'></a>
                </td>
                </tr>";
      if($row['state']==1)          
      {
        $trRow.= catDataShow($row['id'],$path.$row['name_ar'].' <i class="fa fa-arrow-left"></i> ');
      }
		}
	}
  return $trRow;
}

function itemDatashow()
{
  $trRow='';
  global $MySQL_Handle;
  $query = $MySQL_Handle->prepare('SELECT items.id As id, items.name_ar As name, categories.name_ar As category FROM items,categories WHERE items.category=categories.id');

	$query->execute();
	$exec=$query->get_result();
	$catData=[];
	if($exec->num_rows>0)
	{
		while($row= $exec->fetch_assoc())
		{
      $trRow.="<tr>
      <td>".$row['name']."</td>
      <td>".$row['category']."</td>
      <td>
        <a href='product_update.php?pass=".$row['id']."' title='تعديل'><img src='assets/images/edit.png' alt='edit'></a>
        <a href='controller.php?itemDell=".$row['id']."' title='حذف'><img src='assets/images/del.png' alt='del'></a>
      </td>
    </tr>";
		}

	}

		return $trRow;

}



function catDataOption($parent_id,$path)
{  
  $option='';
	global $MySQL_Handle;
  $state = '1';
  $query = $MySQL_Handle->prepare('SELECT * FROM categories WHERE parent=? AND state=?');
  $query->bind_param('ii',$parent_id,$state); 
  
	$query->execute();
	$exec=$query->get_result();
	if($exec->num_rows>0)
	{
		while($row= $exec->fetch_assoc())
		{
      $option .= '<option value="'.$row['id'].'">'.$path.$row['name_ar'].'</option>';
      if($row['state']==1)          
      {
        $option.= catDataOption($row['id'],$path.$row['name_ar'].' --> ');
      }
		}
	}
  return $option;
}


function catEditOption($parent_id,$path,$current_parent,$current_id)
{  
  $option='';
	global $MySQL_Handle;
  $state = '1';
  $query = $MySQL_Handle->prepare('SELECT * FROM categories WHERE parent=? AND state=?');
  $query->bind_param('ii',$parent_id,$state); 
  
	$query->execute();
	$exec=$query->get_result();
	if($exec->num_rows>0)
	{
		while($row= $exec->fetch_assoc())
		{
      if($current_id !=$row['id'])
      {
        if($current_parent== $row['id'])
          $option .= '<option value="'.$row['id'].'" selected="selected">'.$path.$row['name_ar'].'</option>';
        else
          $option .= '<option value="'.$row['id'].'">'.$path.$row['name_ar'].'</option>';
        if($row['state']==1)          
        {
          $option.= catEditOption($row['id'],$path.$row['name_ar'].' --> ',$current_parent,$current_id);
        }
      }
		}
	}
  return $option;
}





function itemDataOption($parent_id,$path)
{
  
  $option='';
	global $MySQL_Handle;
  $query = $MySQL_Handle->prepare('SELECT * FROM categories WHERE parent=?');
  $query->bind_param('i',$parent_id); 
  
	$query->execute();
	$exec=$query->get_result();
	if($exec->num_rows>0)
	{
		while($row= $exec->fetch_assoc())
		{
      if($row['state']==2)  
      $option .= '<option value="'.$row['id'].'">'.$path.$row['name_ar'].'</option>';
      if($row['state']==1)          
      {
        $option.= itemDataOption($row['id'],$path.$row['name_ar'].' --> ');
      }
		}
	}
  return $option;
}

function itemEditOption($parent_id,$path,$category)
{
  
  $option='';
	global $MySQL_Handle;
  $query = $MySQL_Handle->prepare('SELECT * FROM categories WHERE parent=?');
  $query->bind_param('i',$parent_id); 
  
	$query->execute();
	$exec=$query->get_result();
	if($exec->num_rows>0)
	{
		while($row= $exec->fetch_assoc())
		{
      if($row['state']==2)  
      {
        if($row['id']== $category)
          $option .= '<option value="'.$row['id'].'" selected="selected">'.$path.$row['name_ar'].'</option>';
        else
          $option .= '<option value="'.$row['id'].'">'.$path.$row['name_ar'].'</option>';
      }
      if($row['state']==1)          
      {
        $option.= itemEditOption($row['id'],$path.$row['name_ar'].' --> ',$category);
      }
		}
	}
  return $option;
}





function getDetails($id=0,$tableName)
{
  global $MySQL_Handle;     
  $id  = legal_input($id);
  $query = $MySQL_Handle->prepare('SELECT * FROM '.$tableName.' WHERE id=?');
  $query->bind_param('i',$id); 
  $query->execute();
  $exec=$query->get_result();
  $row= $exec->fetch_assoc();
  return $row;
}





function dellRow($id=0,$tableName)
{
  global $MySQL_Handle;   
  $id  = legal_input($id);
  $query = $MySQL_Handle->prepare('DELETE FROM '.$tableName.' WHERE id=?');
  $query->bind_param('i',$id); 
  $exec=$query->execute();
  return $exec;
 
}

function checkCatContains($id,$state)
{
  global $MySQL_Handle;
  $result = false;
  if ($state == 1)
  {
    $query = $MySQL_Handle->prepare('SELECT count(*) as total from categories WHERE parent=?');
  }
  else
  {
    $query = $MySQL_Handle->prepare('SELECT count(*) as total from items WHERE category=?');
  }
  $query->bind_param('i',$id); 
  $query->execute();
  $exec=$query->get_result();
  $row= $exec->fetch_assoc();
  if($row['total']>0)
    $result = true;
  return $result;
}









// convert illegal input to legal input
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>