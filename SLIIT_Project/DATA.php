<?php
            $Main_cat =array("Electronict Devices","Electronic Accessories","Health & Beauty","Home & Lifestyle","Men’s Fashion","Women’s Fashion");
            $TOPIC  =array("Main","T1","T2","T3");
            //"Electronic Devices"
            $E_D_CAT  =array("Electronic Devices","COMPUTER","TAB","TV");
            $COMPUTER =array(array("Acer Nitro 5 Gaming Laptop","-%10","Rs:855,099"),array("ASUS ROG Strix G17 (2021)","-%15","Rs:1510,099"),array("Asus' new ROG Mothership","-%5","Rs:225,099"),array("MSI - GF65 15.6 144hz Gaming Laptop","%-10","Rs:355,099"));
            $TAB      = array(array("Samsung T1","%-13","Rs:100,000"),array("Samsung S2","%-11","Rs:100,200"),array("Ipad","%-10","Rs:200,000"),array("TAB4","%-0.10","Rs:100,159"));
            $TV       =array(array("Samsung TV1","-%10","Rs:200,000"),array(" SamsungTV2","-%10","Rs:150,000"),array("Samsung TV3","-%10","Rs:150,000"),array("SONY TV4","-%10","Rs:300,000"));
            //"Electronic Accessories"
            $E_A_CAT    =array("Electronic Accessories","RAM","Headset","Microphone");
            $RAM        = array(array("Corsair Gaming RAM","%-10","Rs:10,000"),array("XPG 16GB SPECTRIX D60G DDR4","-%10","Rs:15,000"),array("Gloway TYPEa Gaming RAM 8GB ","-%10","Rs:11,000"),array("Kingston Hyperx Savage Gaming Ram 4gb","-%10","Rs:23,000"));
            $Headset    =array(array("Buy BENGOO G9000 Stereo G.H","-%13","Rs:11,000"),array("ASUS Republic of G.H","-%9","Rs:20,000"),array("Asus ROG Strix","%-10","Rs:11,500"),array("MSI Immerse GH30 G.H","-%10","Rs:25,000"));
            $Microphone =array(array("USB Condenser Microphone","-%10","Rs:10,000"),array("YOTTO USB Microphone","-%10","Rs:13,450"),array("HyperX USB Gaming Microphone","-%10","Rs:30,000"),array("Wireless Karaoke Microphone","-%10","Rs:11,023"));
            //"Health & Beauty"
            $H_B_CAT     =array("Health & Beauty","Hair_Care","Supplements","medicine");
            $Hair_Care   =array(array("Plaine Products Shampoos","-%10","Rs:2,000"),array("Head and shoulders Shampoo","-%10","Rs:4,000"),array("TRESEMME Shampoo Hair Care","-%10","Rs:3,000"),array("Tresemme Keratin Smooth Shampoo","-%6","Rs:2,930"));
            $Supplements = array(array("Muscletech NitroTech1","-%10","Rs:10,000"),array("Carnivor Mass 10.7LBS","-%13","Rs:4000"),array("C4 Ripped 30 Servings","-%10","Rs:5,000"),array("JYM PRO Protein Powder","-%10","Rs:15,000"));
            $medicine    =array(array(" Home Use Glucometer","-%10","Rs:20,000"),array("OMRON BLOOD PRESSURE MONITOR","-%1","Rs:4,000"),array("Supplies Pulse oximete","-%10","Rs:10,000"),array("Oxygen Machine","-%10","Rs:30,559"));
            //"Home & Lifestyle"
            $H_L_CAT    =array("Home & Lifestyle","Bathroom Fitting","Lighting","Kitchen");
            $Bathroom_F =array(array("GIULY WATER CLOSET","-%10","Rs:10,000"),array("WHITE SINK","-%10","Rs:11,000"),array("DEW POINT (WITH MANUAL F/V)","-%10","Rs:10,000"),array("SHOWER ENCLOSURES","-%10","Rs:32,000"));
            $Lighting   =array(array("Wall light","-%10","Rs:1,000"),array("Roof light","-%10","Rs:2,500"),array("Garden light","-%10","Rs:3,000"),array("Indoor light","-%10","Rs:1,500"));
            $Kitchen    =array(array("NutriBullet ZNBF30400Z1","-%10","Rs:10,000"),array("NutriBullet ZNBF304oko2","-%3","Rs:20,000"),array("Hawkins Pressure Cookers","%-10","Rs:13,000"),array("Goald Spoon  ","-%10","Rs:3,000"));
            //"Men’s Fashion"
            $M_F_CAT  =array("Men’s Fashion","Clothing","Shoes","Bags");
            $M_Clothing =array(array("Men's Cotton Performance T-Shirt","-%10","Rs:1,500"),array("Casual Denim Button-Up Shirts","-%10","Rs:1,400"),array("Denim Shorts for Men","-%10","Rs:1,600"),array("Slim Fit Navy Blue Bolf 51002W0","-%10","Rs:5,000"));
            $M_Shoes    =array(array("Summer Men Casual Shoes","-%10","Rs:2,000"),array("Sports Shoes","-%10","Rs:2,000"),array("leather Shoes","-%10","Rs:1,500"),array("School Shoos","-%10","Rs:2,000"));
            $M_Bags     =array(array("Leather Messenger Bag","-%10","Rs:2,000"),array("Men's Bag Casual Shoulder","-%14","Rs:3,000"),array("Men's Bag Casual Shoulder","-%10","Rs:3,000"),array("Office Bag","-%10","Rs:8,559"));
            //"Women’s Fashion"
            $W_F_CAT  =array("Women’s Fashion","Clothing","Shoes","Bags");
            $W_Clothing =array(array("t-shirt outfit","-%10","Rs:2,300"),array("Casual saree, Saree blouse designs","-%1","Rs:5,000"),array("Sugathari Sarees","-%10","Rs:8,059"),array("Pink Manipuri Silk Classic Saree","-%10","Rs:5,000"));
            $W_Shoes    =array(array("High heels shoes","-%5","Rs:3,000"),array("Womens Leather Shoes","-%15","Rs:2,000"),array(" High Heel Sandals Party","-%10","Rs:5,000"),array("women, office shoes","-%10","Rs:3,000"));
            $W_Bags     =array(array("Leather Messenger Bag","-%10","Rs:10,000"),array("Toet Purse Satchel Bag PU Leather","-%5","Rs:2,000"),array("Purse Satchel Bag PU Leather","-%11","Rs:2,000"),array("Fashion Toet Purse Satchel Bag PU Leather","-%3","Rs:1,600"));
?>

<script script type="text/javascript">
    var Main_cat = <?php echo json_encode($Main_cat); ?>;
    var TOPIC = <?php echo json_encode($TOPIC); ?>;

    var E_D_CAT = <?php echo json_encode($E_D_CAT); ?>;
    var COMPUTER = <?php echo json_encode($COMPUTER); ?>;
    var TAB = <?php echo json_encode($TAB); ?>;
    var TV = <?php echo json_encode($TV); ?>;

    var E_A_CAT = <?php echo json_encode($E_A_CAT); ?>;
    var RAM = <?php echo json_encode($RAM); ?>;
    var Headset = <?php echo json_encode($Headset); ?>;
    var Microphone = <?php echo json_encode($Microphone); ?>;

    var H_B_CAT = <?php echo json_encode($H_B_CAT); ?>;
    var Hair_Care = <?php echo json_encode($Hair_Care); ?>;
    var Supplements = <?php echo json_encode($Supplements); ?>;
    var medicine = <?php echo json_encode($medicine); ?>;

    var H_L_CAT = <?php echo json_encode($H_L_CAT); ?>;
    var Bathroom_F = <?php echo json_encode($Bathroom_F); ?>;
    var Lighting = <?php echo json_encode($Lighting); ?>;
    var Kitchen = <?php echo json_encode($Kitchen); ?>;

    var M_F_CAT = <?php echo json_encode($M_F_CAT); ?>;
    var M_Clothing = <?php echo json_encode($M_Clothing); ?>;
    var M_Shoes = <?php echo json_encode($M_Shoes); ?>;
    var M_Bags = <?php echo json_encode($M_Bags); ?>;

    var W_F_CAT = <?php echo json_encode($W_F_CAT); ?>;
    var W_Clothing = <?php echo json_encode($W_Clothing); ?>;
    var W_Shoes = <?php echo json_encode($W_Shoes); ?>;
    var W_Bags = <?php echo json_encode($W_Bags); ?>;



//////////////*******************************************************/////////
//BACK
function BACK(){
  document.getElementById("HIDE_MANUE").style.display="block";
  document.getElementById("HIDE_CONTAIN").style.display="none";

}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function Electronic_Devices()
{
//HIDE
document.getElementById("HIDE_MANUE").style.display="none";
document.getElementById("HIDE_CONTAIN").style.display="block";
//Main Topic
  for (let index = 0; index < E_D_CAT.length; index++) {
    document.getElementById(TOPIC[index]).innerHTML=E_D_CAT[index];  
  }
//Image
for (let index = 1; index < 4; index++) {
for (let iny = 1; iny < 5; iny++) {
        document.getElementById("R"+index+iny).src= "Electronic Devices/"+ E_D_CAT[index]+"/"+iny+".jpg";
    }    
  }     
//1 Row 

for (let iny = 1; iny < 5; iny++) {
        document.getElementById("Name_MN"+"1"+iny).innerHTML= COMPUTER[iny-1][0];
        document.getElementById("DIS_MN"+"1"+iny).innerHTML= COMPUTER[iny-1][1];
        document.getElementById("Name_Pris"+"1"+iny).innerHTML= COMPUTER[iny-1][2];     
    }    
//2 Row 

for (let iny = 1; iny < 5; iny++) {
        document.getElementById("Name_MN"+"2"+iny).innerHTML= TAB[iny-1][0];
        document.getElementById("DIS_MN"+"2"+iny).innerHTML= TAB[iny-1][1];
        document.getElementById("Name_Pris"+"2"+iny).innerHTML= TAB[iny-1][2];     
    }                  
//3 Row 

for (let iny = 1; iny < 5; iny++) {
        document.getElementById("Name_MN"+"3"+iny).innerHTML= TV[iny-1][0];
        document.getElementById("DIS_MN"+"3"+iny).innerHTML= TV[iny-1][1];
        document.getElementById("Name_Pris"+"3"+iny).innerHTML= TV[iny-1][2];     
    }                
}
//Electronic_Devices()
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function Electronic_Accessories()
{
//HIDE
document.getElementById("HIDE_MANUE").style.display="none";
document.getElementById("HIDE_CONTAIN").style.display="block";
//Main Topic
  for (let index = 0; index < E_A_CAT.length; index++) {
    document.getElementById(TOPIC[index]).innerHTML=E_A_CAT[index];  
  }
//Image
for (let index = 1; index < 4; index++) {
for (let iny = 1; iny < 5; iny++) {
        document.getElementById("R"+index+iny).src= "Electronic Accessories/"+ E_A_CAT[index]+"/"+iny+".jpg";
    }    
  }     
//1 Row 

for (let iny = 1; iny < 5; iny++) {
        document.getElementById("Name_MN"+"1"+iny).innerHTML= RAM[iny-1][0];
        document.getElementById("DIS_MN"+"1"+iny).innerHTML= RAM[iny-1][1];
        document.getElementById("Name_Pris"+"1"+iny).innerHTML= RAM[iny-1][2];     
    }    
//2 Row 

for (let iny = 1; iny < 5; iny++) {
        document.getElementById("Name_MN"+"2"+iny).innerHTML= Headset[iny-1][0];
        document.getElementById("DIS_MN"+"2"+iny).innerHTML= Headset[iny-1][1];
        document.getElementById("Name_Pris"+"2"+iny).innerHTML= Headset[iny-1][2];     
    }                  
//3 Row 

for (let iny = 1; iny < 5; iny++) {
        document.getElementById("Name_MN"+"3"+iny).innerHTML= Microphone[iny-1][0];
        document.getElementById("DIS_MN"+"3"+iny).innerHTML= Microphone[iny-1][1];
        document.getElementById("Name_Pris"+"3"+iny).innerHTML= Microphone[iny-1][2];     
    }                
}
//Electronic_Accessories()
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function Health_Beauty()
{
//HIDE
document.getElementById("HIDE_MANUE").style.display="none";
document.getElementById("HIDE_CONTAIN").style.display="block";
//Main Topic
  for (let index = 0; index < H_B_CAT.length; index++) {
    document.getElementById(TOPIC[index]).innerHTML=H_B_CAT[index];  
  }
//Image
for (let index = 1; index < 4; index++) {
for (let iny = 1; iny < 5; iny++) {
        document.getElementById("R"+index+iny).src= "Health & Beauty/"+ H_B_CAT[index]+"/"+iny+".jpg";
    }    
  }     
//1 Row 

for (let iny = 1; iny < 5; iny++) {
        document.getElementById("Name_MN"+"1"+iny).innerHTML= Hair_Care[iny-1][0];
        document.getElementById("DIS_MN"+"1"+iny).innerHTML= Hair_Care[iny-1][1];
        document.getElementById("Name_Pris"+"1"+iny).innerHTML= Hair_Care[iny-1][2];     
    }    
//2 Row 

for (let iny = 1; iny < 5; iny++) {
        document.getElementById("Name_MN"+"2"+iny).innerHTML= Supplements[iny-1][0];
        document.getElementById("DIS_MN"+"2"+iny).innerHTML= Supplements[iny-1][1];
        document.getElementById("Name_Pris"+"2"+iny).innerHTML= Supplements[iny-1][2];     
    }                  
//3 Row 

for (let iny = 1; iny < 5; iny++) {
        document.getElementById("Name_MN"+"3"+iny).innerHTML= medicine[iny-1][0];
        document.getElementById("DIS_MN"+"3"+iny).innerHTML= medicine[iny-1][1];
        document.getElementById("Name_Pris"+"3"+iny).innerHTML= medicine[iny-1][2];     
    }                
}
//Health_Beauty()
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function Home_Lifestyle()
{
//HIDE
document.getElementById("HIDE_MANUE").style.display="none";
document.getElementById("HIDE_CONTAIN").style.display="block";
//Main Topic
  for (let index = 0; index < H_L_CAT.length; index++) {
    document.getElementById(TOPIC[index]).innerHTML=H_L_CAT[index];  
  }
//Image
for (let index = 1; index < 4; index++) {
for (let iny = 1; iny < 5; iny++) {
        document.getElementById("R"+index+iny).src= "Home & Lifestyle/"+ H_L_CAT[index]+"/"+iny+".jpg";
    }    
  }     
//1 Row 

for (let iny = 1; iny < 5; iny++) {
        document.getElementById("Name_MN"+"1"+iny).innerHTML= Bathroom_F[iny-1][0];
        document.getElementById("DIS_MN"+"1"+iny).innerHTML= Bathroom_F[iny-1][1];
        document.getElementById("Name_Pris"+"1"+iny).innerHTML= Bathroom_F[iny-1][2];     
    }    
//2 Row 

for (let iny = 1; iny < 5; iny++) {
        document.getElementById("Name_MN"+"2"+iny).innerHTML= Lighting[iny-1][0];
        document.getElementById("DIS_MN"+"2"+iny).innerHTML= Lighting[iny-1][1];
        document.getElementById("Name_Pris"+"2"+iny).innerHTML= Lighting[iny-1][2];     
    }                  
//3 Row 

for (let iny = 1; iny < 5; iny++) {
        document.getElementById("Name_MN"+"3"+iny).innerHTML= Kitchen[iny-1][0];
        document.getElementById("DIS_MN"+"3"+iny).innerHTML= Kitchen[iny-1][1];
        document.getElementById("Name_Pris"+"3"+iny).innerHTML= Kitchen[iny-1][2];     
    }                
}
// Home_Lifestyle()
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function Men_Fashion()
{
//HIDE
document.getElementById("HIDE_MANUE").style.display="none";
document.getElementById("HIDE_CONTAIN").style.display="block";
//Main Topic
  for (let index = 0; index < M_F_CAT.length; index++) {
    document.getElementById(TOPIC[index]).innerHTML=M_F_CAT[index];  
  }
//Image
for (let index = 1; index < 4; index++) {
for (let iny = 1; iny < 5; iny++) {
        document.getElementById("R"+index+iny).src= "Men_Fashion/"+ M_F_CAT[index]+"/"+iny+".jpg";
    }    
  }     
//1 Row 

for (let iny = 1; iny < 5; iny++) {
        document.getElementById("Name_MN"+"1"+iny).innerHTML= M_Clothing[iny-1][0];
        document.getElementById("DIS_MN"+"1"+iny).innerHTML= M_Clothing[iny-1][1];
        document.getElementById("Name_Pris"+"1"+iny).innerHTML= M_Clothing[iny-1][2];     
    }    
//2 Row 

for (let iny = 1; iny < 5; iny++) {
        document.getElementById("Name_MN"+"2"+iny).innerHTML= M_Shoes[iny-1][0];
        document.getElementById("DIS_MN"+"2"+iny).innerHTML= M_Shoes[iny-1][1];
        document.getElementById("Name_Pris"+"2"+iny).innerHTML= M_Shoes[iny-1][2];     
    }                  
//3 Row 

for (let iny = 1; iny < 5; iny++) {
        document.getElementById("Name_MN"+"3"+iny).innerHTML= M_Bags[iny-1][0];
        document.getElementById("DIS_MN"+"3"+iny).innerHTML= M_Bags[iny-1][1];
        document.getElementById("Name_Pris"+"3"+iny).innerHTML= M_Bags[iny-1][2];     
    }                
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function Women_Fashion()
{
//HIDE
document.getElementById("HIDE_MANUE").style.display="none";
document.getElementById("HIDE_CONTAIN").style.display="block";
//Main Topic
  for (let index = 0; index < W_F_CAT.length; index++) {
    document.getElementById(TOPIC[index]).innerHTML=W_F_CAT[index];  
  }
//Image
for (let index = 1; index < 4; index++) {
for (let iny = 1; iny < 5; iny++) {
        document.getElementById("R"+index+iny).src= "Women_Fashion/"+ W_F_CAT[index]+"/"+iny+".jpg";
    }    
  }     
//1 Row 

for (let iny = 1; iny < 5; iny++) {
        document.getElementById("Name_MN"+"1"+iny).innerHTML=  W_Clothing[iny-1][0];
        document.getElementById("DIS_MN"+"1"+iny).innerHTML=  W_Clothing[iny-1][1];
        document.getElementById("Name_Pris"+"1"+iny).innerHTML=  W_Clothing[iny-1][2];     
    }    
//2 Row 

for (let iny = 1; iny < 5; iny++) {
        document.getElementById("Name_MN"+"2"+iny).innerHTML=  W_Shoes[iny-1][0];
        document.getElementById("DIS_MN"+"2"+iny).innerHTML=  W_Shoes[iny-1][1];
        document.getElementById("Name_Pris"+"2"+iny).innerHTML=  W_Shoes[iny-1][2];     
    }                  
//3 Row 

for (let iny = 1; iny < 5; iny++) {
        document.getElementById("Name_MN"+"3"+iny).innerHTML=  W_Bags[iny-1][0];
        document.getElementById("DIS_MN"+"3"+iny).innerHTML=  W_Bags[iny-1][1];
        document.getElementById("Name_Pris"+"3"+iny).innerHTML=  W_Bags[iny-1][2];     
    }                
}
//Women_Fashion()
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

</script>