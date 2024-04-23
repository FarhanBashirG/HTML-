<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location:../");
}
    $userdata = $_SESSION['userdata'];
    $groupsdata = $_SESSION['groupsdata'] ;
        if($_SESSION['userdata']['status']==0){
            $status ='<b style="color:red">Not Voted</b>';

        }else{
            $status ='<b style="color:green"> Voted</b>';

        }

?>

<div id="Group">
        <?php
        if($_SESSION['groupsdata']){
            for($i=0; $i<count($groupsdata); $i++){
                ?>
                <div>
                <img style="float:right" src="../uploads/<?php echo $groupsdata[$i]['photo'];?>" height="100" weight="100"><br><br>
            <b>Group Name:</b><?php echo $groupsdata[$i]['name'] ?><br><br>
            <b>Votes:</b><?php echo $groupsdata[$i]['votes'] ?><br><br>
                <form action="../api/vote.php" method="post">
                    <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes'] ?>">
                    <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id'] ?>">

                 
                </form>
            </div><br>
            <hr>

            <?php
            }
        }
        else{

        }
        ?>

</div>