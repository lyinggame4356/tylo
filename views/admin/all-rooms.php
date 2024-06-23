<div class="col m8 l10 s12 content-body">
    <div class="row" style="margin-top: 20px;">
      <?php
    if(isset($_REQUEST['msg'])){
      $msg=$_REQUEST['msg'];
      if($msg=='1'){
        ?>
          <div class="card-panel green white-text">Room Edited successfully!!</div>
        <?php
      }
      
        
    }
      
    ?>
      <div class="col s8">
        <h5>ALL ROOMS</h5>
      </div>
      
    </div>
    <div class="row">
      <div class="col s12">
        <table class="striped responsive-table">
          <thead>
            <th>
              #
            </th>
            <th>
            Name
            </th>
          
            <th>
              Type
            </th>
             <th>
            Rent
            </th>
          
            <th>
              Image
            </th>
             <th>
            Occupancy
            </th>
          
            <th>
            Description
              
            </th>
          </thead>
          <tbody>
          <?php
            $db = new db;
            $data = $db->get('rooms','*',"");
            $i=1;
            foreach($data['result'] as $key => $rw){
             $id=$rw['id']; 
          ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $rw['room_name']; ?></td>
              <td><?php echo $rw['room_type']; ?></td>
              <td><?php echo $rw['rent']; ?></td>
              <td><img src="/img/rooms/<?php echo $rw['featured_img'] ?>" class="responsive-img" hight="50px" width="50px"></td>
              <td><?php echo $rw['max_occupancy']; ?></td>
              <td><?php echo $rw['description']; ?></td>
              <td>
                 <a <?php echo  'href="/admin/add/room-delete/?id='.$id.'"' ?>  class="btn-floating red" ><i class="material-icons" onClick="confirm_btn()">delete</i></a>
              </td>
              <td>
                
               <a <?php echo  'href="/admin/room-edit/?id='.$id.'"' ?> class="btn-floating yellow darken-4" ><i class="material-icons">edit</i></a>
              </td>

            </tr>
            <?php $i++; } ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script>
	function confirm_btn(){
		if(window.confirm('You really want to delete?') == true){ 
			//window.location.assign('/functions/cancel/<?php echo $data['result'][0][0]; ?>/');
		}
		else{
			event.preventDefault(); 
		}
	}
</script>