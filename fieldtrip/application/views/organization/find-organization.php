<?php 
$this->load->view("subparts/header_div"); 
$this->load->view("subparts/topmenu_div"); 
?>
<!-- Body Start --> 
  <div class="mainbox">
    <div class="mainboxcol">
    <p><strong>Seatch By:</strong></p>
       <div class="mainboxcol_1">
           <li>Organization ID</li>
           <li>Organization Name</li>
           <li>Organization Type</li>
           <li>Audience</li>
           <li>Phone</li>
           <li>Fax</li>
           <li>City</li>
           <li>State</li>
           <li>FTF Member</li>
           <li>Member Since</li>
           <li>Zip</li>
       </div>
       <div class="mainboxcol_2">
         <div class="mainboxcol_2_1">
           <li><input type="text" size="30" /></li>
           <li><input type="text" size="30" /></li>
           <li>
             <form name="form" id="form" >
               <select name="jumpMenu" class="ddown" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
                 <option>item1</option>
               </select>
             </form>
           </li>
           <li>
             <form name="form" id="form" >
               <select name="jumpMenu" class="ddown" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
                 <option>item1</option>
               </select>
             </form>
           </li>
            <li>
              <div class="phone">
                <div class="phone_col">
                   <div class="phone_col_1"><input type="text" size="6" /></div>
                   <div class="phone_col_2"><input type="text" size="6" /></div>
                </div>
                <div class="phone_co2"><input type="text" size="6" /></div>
              </div>
            </li>
            <li>
              <div class="phone">
                <div class="phone_col">
                   <div class="phone_col_1"><input type="text" size="6" /></div>
                   <div class="phone_col_2"><input type="text" size="6" /></div>
                </div>
                <div class="phone_co2"><input type="text" size="6" /></div>
              </div>
            </li>
             <li><input type="text" size="30" /></li>
             <li><input type="text" size="30" /></li>
             <li>
                <div class="phone">
                <div class="phone_col">
                   <div class="phone_col_1"><input name="" type="radio" value="Yes" />Yes</div>
                   <div class="phone_col_2"><input name="" type="radio" value="No" />No</div>
                </div>
                <div class="phone_co2"><input name="" type="radio" value="N/A" />N/A</div>
              </div>
             </li>
             <li>
              <div class="member">
                <div class="member_col">
                  <form name="form" id="form" >
               <select name="jumpMenu" class="ddown1" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
                 <option>item1</option>
               </select>
             </form>
                </div>
                <div class="member_co2"><input type="text" size="10" /></div>
              </div>
             </li>
             <li><input type="text" size="30" /></li>
             <li>(EXAT)<input name="" type="radio" value="" />2<input name="" type="radio" value="" />10<input name="" type="radio" value="" />30miles</li>
                 <li>
             <div class="button">
               <div class="buttoncol1"><input name="" type="button" value="search" class="search" /></div>
               <div class="buttoncol2"></div>
             </div>
               </li>
         </div>
       </div>
    </div>
    <div class="mainboxco2"></div>
    </div>
<?php $this->load->view("subparts/footer_div"); ?>
