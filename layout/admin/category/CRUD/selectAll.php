<?php 
    $server = "localhost";
    $user = "root"; 
    $password = ""; 
    $database = "qlbanqa";
    $con = mysqli_connect($server, $user, $password, $database);

    if (mysqli_connect_errno()) {
        die("Connection failed" . mysqli_connect_error());
    }

    $query = "SELECT * FROM `categories` WHERE status='0'";
    $result = mysqli_query($con, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['IDCA'];
            $name = $row['NAME'];
            echo
                    '<tr>
                        <td></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td></td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item edit-btn" data-toggle="tooltip" data-placement="top" title="Edit" data-id="'.$id.'">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <a class="zmdi zmdi-delete" href="CRUD/delete.php?deleteid='.$id.'" onclick="return confirmDelete()"></a>
                                </button>
                            </div>
                        </td>
                    </tr> 
            ';               
        }
    }else{
        echo '<tr><td colspan="4">Error: Unable to fetch data from the database.</td></tr>';
    }
    include ("edit_form.php");
    mysqli_close($con);
?>
