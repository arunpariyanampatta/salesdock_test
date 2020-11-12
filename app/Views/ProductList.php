<div class="contact-w3l">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Product List
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- contact -->
			<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						
                                            <table class="table-bordered table">
                                                <thead>
                                                <th>ProductName</th>
                                                <th>ProductType</th>
                                                <th>ProductRule</th>
                                                </thead>
                                                <tbody>
                                                    <?php if(empty($result)){?>
                                                        
                                                    <tr>
                                                        <td>No Product Or Rule found</td>
                                                    </tr>
                                                        
                                                        <?php }?>
                                                        <?php foreach($result as $index=>$value){?>
                                                        <tr>
                                                        <td><?php echo $result[$index]['PRODUCT_NAME']?></td>
                                                        <td><?php echo $result[$index]['TYPE_NAME']?></td>
                                                        
                                                        <td><?php echo $result[$index]['RULE'];?></td>
                                                        </tr>
                                                        <?php }?>
                                                    
                                                </tbody>
                                            </table>
                                            
					</div>
					<div class="contact-right wthree">
						
						<div class="col-xs-5 contact-agile">
							<img src="images/contact2.jpg" alt="">
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!-- //contact -->
		</div>
	</div>