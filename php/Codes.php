<?php 
	class Codes{
		public $db, $result;
		public function setConn(){
			$this->db=new mysqli("localhost","root","","Gym");
		}
		public function setIn($sql){
			$this->setConnect();
			$r=$this->db->query($sql);
			echo $r==1?"operation is done success":"failed";
			$this->db->close();
		}
		public function setSql($sql){
			$this->setConn();
			$r=$this->db->query($sql);
			// echo $r==1?"operation is done":"failed";
			if($rr=$r->fetch_array(MYSQLI_NUM)){
				echo $rr[0];
			}else{
				echo "failed";
			}
			$this->db->close();
		}

			public function setView($sql){
			$this->setConn();
			$this->result=$this->db->query($sql);
			$cols=$this->result->fetch_fields();
			?>

<div class="modal m-5 modal-sm" id="deleted" style="text-align: center;">
              <div class="modal-dialog">
                <div class="modal-content">
                  
                  <div class="modal-body">
                    <h4>Are you sure to delete?</h4>
                      <input type="submit" value="Yes" class="btn btn-primary btn-sm" id="bdel">
                      <input type="button" value="No" class="btn btn-danger btn-sm" id="no">
                </div>                    
                    
                    </div>
                  </div>
              </div>

                <div class="modal m-5 modal-sm " id="messege" style="text-align: center;">
              <div class="modal-dialog">
                <div class="modal-content">
                  
                  <div class="modal-body">
                    <div id="pp"></div>
                      <input type="submit" value="Ok" class="btn btn-primary btn-sm" id="sve">
                </div>                    
                    
                    </div>
                  </div>
              </div>

			  <style>
   #dynamic-table{
    width: 96%;
    table-layout: fixed; /* Ensures consistent column widths */
    border-collapse: collapse;
}


/* Prevent buttons from moving */
#dynamic-table .td:last-child {
    white-space: nowrap; /* Prevent wrapping */
}

</style>
			<table class="table" id="dynamic-table">

				<thead class="bg-success" style="color: white;">
					<tr>
						<?php foreach ($cols as $key => $value):?>
							<th><?php echo $value->name; ?></th>
							
							<?php endforeach ?>
							<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($this->result as $key => $row):?>
						<tr>
							<?php foreach ($row as $key => $value):?>
								<td class="td"><?php echo $value; ?></td>
								
								<?php endforeach ?>
								<td class="td">

								<button class="btn btn-success p-1 update" id="upd" value="<?php echo $row['id']; ?>"> Update </button>
								<button class="btn btn-danger p-1 delete" value="<?php echo $row['id']; ?>"> Delete </button>

								</td>
								
						</tr>
						<?php endforeach ?>
				</tbody>
			</table>
			<?php

			$this->db->close();
		}


		public function setReport($sql){
			$this->setConn();
			$this->result=$this->db->query($sql);
			$cols=$this->result->fetch_fields();
			?>


			  <style>
   #dynamic-table{
    width: 96%;
    table-layout: fixed; /* Ensures consistent column widths */
    border-collapse: collapse;
}


/* Prevent buttons from moving */
#dynamic-table .td:last-child {
    white-space: nowrap; /* Prevent wrapping */
}

</style>
			<table class="table" id="dynamic-table">

				<thead class="bg-success" style="color: white;">
					<tr>
						<?php foreach ($cols as $key => $value):?>
							<th><?php echo $value->name; ?></th>
							
							<?php endforeach ?>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($this->result as $key => $row):?>
						<tr>
							<?php foreach ($row as $key => $value):?>
								<td class="td"><?php echo $value; ?></td>
								
								<?php endforeach ?>
								
						</tr>
						<?php endforeach ?>
				</tbody>
			</table>
			<?php

			$this->db->close();
		}
		public function search($sql){
			$this->setConn();
			$this->result=$this->db->query($sql);
			$this->db->close();
		}

		public function fillCombo($sql){
			$this->setConn();
			$res=$this->db->query($sql);
			while ($r=$res->fetch_array(MYSQLI_NUM)) {
				?>
						<option value="<?php echo $r[0]; ?>"><?php echo $r[1]; ?></option>
				<?php
		
			}
		}

			public function setCount($sql){
			$this->setConn();
			$this->result=$this->db->query($sql);
			$cols=$this->result->fetch_fields();
			?>


			<table>

				<thead>
					<tr>
						<?php foreach ($cols as $key => $value):?>
							<th><?php echo $value->name; ?></th>
							
							<?php endforeach ?>

					</tr>
				</thead>
				<tbody>
					<?php foreach ($this->result as $key => $row):?>
						<tr>
							<?php foreach ($row as $key => $value):?>
								<td><?php echo $value; ?></td>
								
								<?php endforeach ?>
								
								
						</tr>
						<?php endforeach ?>
				</tbody>
			</table>
			<?php

			$this->db->close();
		}
	}
 ?>




