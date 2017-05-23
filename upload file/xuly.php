<?php 
	
	if ((($_FILES["HinhAvatar"]["type"] == "image/gif")
		|| ($_FILES["HinhAvatar"]["type"] == "image/jpeg")
		|| ($_FILES["HinhAvatar"]["type"] == "image/pjpeg"))
		&& ($_FILES["HinhAvatar"]["size"] < 2000000))
		  {
		  if ($_FILES["HinhAvatar"]["error"] > 0)
		    {
		    echo "Return Code: " . $_FILES["HinhAvatar"]["error"] . "<br />";
		    }
		  else
		    {
		    echo "Upload: " . $_FILES["HinhAvatar"]["name"] . "<br />";
		    echo "Type: " . $_FILES["HinhAvatar"]["type"] . "<br />";
		    echo "Size: " . ($_FILES["HinhAvatar"]["size"] / 1024) . " Kb<br />";
		    echo "Temp file: " . $_FILES["HinhAvatar"]["tmp_name"] . "<br />";

		    if (file_exists("upload/" . $_FILES["HinhAvatar"]["name"]))
		      {
		      echo $_FILES["HinhAvatar"]["name"] . " already exists. ";
		      }
		    else
		      {
		      move_uploaded_file($_FILES["HinhAvatar"]["tmp_name"],
		      "upload/" . $_FILES["HinhAvatar"]["name"]);
		      echo "Stored in: " . "upload/" . $_FILES["HinhAvatar"]["name"];
		      }
		    }
		  }
		else
		  {
		  echo "Invalid file";
		  }