<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24/04/2017
 * Time: 10:33
 */

?>

<div class="centHead">Peer Review Form</div>
<div class="lInfo">
    Group Name/Number <p>
    <p></p>
    Project
    <p></p><p></p><p></p>
    Name and Number of student completing form
</div>

<div class="tHead">
    <div class="myCol">Student Name<p></p>Including Self</div>
    <div class="myCol">Main contribution to the group project<p></p>add comments if necessary</div>
    <div class="myCol">Marks Allocated %</div>
</div>

<div class="tBody">
    <?php
    $s=0;
    while ($s<$gCount){
        $s++;
    print "
    <div class='myRow'>
        <div class='myCol'><input type='text' name='sName[]' id='sName'   ></div>
        <div class='myCol'><input type='text' name='sComent[]' id='sComent'   ></div>
        <div class='myCol'><input type='text' name='sMark[]' id='sMark'   ></div>
    </div>
";} ?>
</div>
<div class="tTail">
    <input type="text" disabled>
    <label>Marks allocated must add up to 10</label>
</div>