<?php require_once '../../../../../util/inc.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Spacetree - Add/Remove Subtrees</title>

<!-- CSS Files -->
<link type="text/css" href="../css/base.css" rel="stylesheet" />
<link type="text/css" href="../css/Spacetree.css" rel="stylesheet" />

<!--[if IE]><script language="javascript" type="text/javascript" src="../../Extras/excanvas.js"></script><![endif]-->
<script type="text/javascript" src="<?php echo(HTTP_ROOT) ?>/html/js/scriptaculous/lib/prototype.js"></script>

<!-- JIT Library File -->
<script language="javascript" type="text/javascript" src="../../jit.js"></script>
<!-- Example File -->
<script language="javascript" type="text/javascript" src="example3_js.php"></script>
</head>

<body onload="init();">
<div id="container">

<div id="left-container">



<div class="text">
<h4>
Add/Remove Subtrees    
</h4> 

            This example shows how to add/remove subtrees with the SpaceTree.<br /><br />
            <b>Add</b> a subtree by clicking on the <em>Add</em> button located in the right column.<br /><br />
            <b>Remove</b> a subtree by clicking on a red colored node
            
</div>

<div id="id-list"></div>


<div style="text-align:center;"><a href="example3.js">See the Example Code</a></div>            
</div>

<div id="center-container">
    <div id="infovis"></div>    
</div>

<div id="right-container">

<h4>Add Subtrees</h4>
<table>
    <tr>
        <td>
            Animate:
        </td>
        <td>
            <input type="checkbox" id="animate" checked="checked" />
        </td>
    </tr>
    <tr>
        <td>
            <input type="button" id="addSubtree" value="Add" />
        </td>
        <td>
            
        </td>
    </tr>
</table>

</div>

<div id="log"></div>
</div>
</body>
</html>
