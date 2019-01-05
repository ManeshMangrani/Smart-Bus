 <section class="section-height-800 breadcrumb-modern rd-parallax context-dark bg-gray-darkest text-lg-left">
          <div data-speed="0.2" data-type="media" data-url="<?php echo PATH; ?>images/backgrounds/background-01-1920x900.jpg" class="rd-parallax-layer"></div>
          <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="bg-primary-chathams-blue-reverse">
              <div class="shell section-top-57 section-bottom-30 section-md-top-210 section-lg-top-260">
                <div class="veil reveal-md-block">
                  <h1 class="text-bold">Destinations</h1>
                </div>
                <ul class="list-inline list-inline-icon list-inline-icon-type-1 list-inline-icon-extra-small list-inline-icon-white p offset-top-30 offset-md-top-40 offset-lg-top-125">
                  <li><a href="<?php echo base_url();?>index.php/Welcome/index" class="text-white">Home</a></li>
                  <li><a href="destinations.html" class="text-white">Booking</a></li>
                  <li>Ticket
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </header>

<main class="page-content section-90 section-md-111 text-md-left">
	<section class="offset-top-60 offset-md-top-111">
    	<div class="shell">
        <h2 class="text-bold">Traveller Info</h2>
            <hr class="divider hr-md-left-0 bg-chathams-blue">
        	<div class="range range-xs-center range-md-left offset-top-30 offset-md-top-65">
            	<div class="cell-xs-10 cell-lg-9">
            		<!-- Classic Responsive Table-->
            		<table data-responsive="true" class="table table-custom table-primary table-fixed">
              			<b><tr>
                			<th>Registration ID</th>
							<th>Name</th>
							<th>CNIC</th>
							<th>Gender</th>
              			</tr></b>
              			<tr>
                			<td> <?php if($this->session->userdata('user_id')){ echo $this->session->userdata('user_id');}
							 else{echo $this->session->userdata('p_id');}?></td>
							<td> <?php echo $this->session->userdata('username'); ?></td>
							<td> <?php echo $this->session->userdata('cnic'); ?> </td>
							<td> <?php echo $this->session->userdata('gender'); ?> </td>
    	        		</tr>
            		</table>
          		</div>
        	</div>
    	</div>
	</section>
	<section class="offset-top-60 offset-md-top-111">
    	<div class="shell">
        <h2 class="text-bold">Travelling Info</h2>
            <hr class="divider hr-md-left-0 bg-chathams-blue">
        	<div class="range range-xs-center range-md-left offset-top-30 offset-md-top-65">
            	<div class="cell-xs-10 cell-lg-9">
            		<!-- Classic Responsive Table-->
            		<table data-responsive="true" class="table table-custom table-primary table-fixed">
              			<b><tr>
                			<th>Source</th>
							<th>Destination</th>
							<th>Departure</th>
							<th>Arrival</th>
              			</tr></b>
              			<tr>
                			<td> <?php echo $this->session->userdata('source'); ?></td>
							<td> <?php echo $this->session->userdata('destination'); ?></td>
							<td> <?php echo $this->session->userdata('busdate').' - '.$this->session->userdata('departure'); ?> </td>
							<td> <?php echo $this->session->userdata('arrival').' - '; 
							   if($this->session->userdata('day') == 1){ echo "Next Day";}
							   else{echo "Same Day";}; ?> 
							</td>
    	        		</tr>
            		</table>
          		</div>
        	</div>
    	</div>
	</section>
	<section class="offset-top-60 offset-md-top-111">
    	<div class="shell">
        <h2 class="text-bold">Technical Info</h2>
            <hr class="divider hr-md-left-0 bg-chathams-blue">
        	<div class="range range-xs-center range-md-left offset-top-30 offset-md-top-65">
            	<div class="cell-xs-10 cell-lg-9">
            		<!-- Classic Responsive Table-->
            		<table data-responsive="true" class="table table-custom table-primary table-fixed">
              			<b><tr>
                			<th>Reservation ID</th>
							<th>Status</th>
							<th>Distance</th>
							<th>Fare/Dicount(%)</th>
							<th>Seat #</th>
              <th>Print</th>
              			</tr></b>
              			<tr>
                			<td style="color: red"> <?php echo $this->session->userdata('reservation_id'); ?></td>
							<td> <?php if($this->session->userdata('state') == 1){echo "Booked, Payment Pending.";}
								elseif($this->session->userdata('state') == 2){echo "Confirmed";}
								elseif($this->session->userdata('state') == 3){echo "Refund";}
								elseif($this->session->userdata('state') == 4){echo "Cancelled";} ?></td>
							<td> <?php echo $this->session->userdata('km'); ?></td>
							<td> <?php if($this->session->userdata('logged_in')){ echo $this->session->userdata('offer_price')*$this->session->userdata('num-seat').'/'.$this->session->userdata('offer_value');}
              else echo $this->session->userdata('offer_price').'/'.$this->session->userdata('offer_value'); ?></td>
							<td> <?php echo $this->session->userdata('seatno'); ?> </td>
              <td> <a href="<?php echo site_url('index.php/pdf/ticket_print') ?>" class="btn btn-xs btn btn-ellipse-type-2 btn-ripe-lemon" target="_blank">Print PDF</a> </td>
    	        		</tr>
            		</table>
          		</div>
        	</div>
    	</div>
	</section>
</main>

