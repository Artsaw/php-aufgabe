<?php require_once('my_fns.php'); ?>

<style>
    form{
        border: solid 1px white;
        padding: 15px;
    }
    #container{
        background: rgba(0,0,0,0.8);
        width: 1000px;
        margin: 0 auto;
        padding: 15px 30px;
        color: white;
    }
    .delete-row{
        float: left;
        padding: 0 5px;
    }
    .delete-row a{
        color: red;
    }
</style>

<div id="container">
    
    <form method="POST" action="aufgabe.php">
        <div id="info-error"></div><br />
        Text: <input name="txt_add_info" placeholder="Info ..." />
        <input name="cmd_add_info" type="submit" value="Speichern" />
    </form>
    
    <?php $infos = get_info(); ?>
    <?php foreach($infos as $item):?>
    <div class="info">
      <div class="delete-row" ><a href="http://artsaw.de/delete.php?id=<?php echo $item['id']; ?>">X</a></div>
      <p><?php echo $item['id'].": Termin: ".$item['datum']." / ".$item['zeit']; ?></p>
      <p><?php echo nl2br($item['info']); ?></p>
    </div><hr />
    <?php endforeach;
      
    if(isset($_POST['cmd_add_info'])){
      if(!empty($_POST['txt_add_info'])){
        add_info($new_time, $date, mysql_real_escape_string($_POST['txt_add_info']));
        ?><script>location.href='http://artsaw.de/aufgabe.php';</script><?php 
      }
    } ?>
    
</div>