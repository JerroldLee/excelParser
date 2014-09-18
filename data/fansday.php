<?php

  $brandImageURL = 'http://static.feifei.com/images/activity/fansday/fansday/brand/';
  $bannerImageURL = 'http://static.feifei.com/images/activity/fansday/fansday/banner/';
  $baseImageURL = 'http://static.feifei.com/images/activity/fansday/';
  $this->baseImageURL = $baseImageURL;

  $pageTitle = '飞粉日半价疯抢';
  $this->pageTitle = $pageTitle;

  //  家纺家具
  $floor_n1 = array(
    //@floor_1
    array('sku'=>'C9530950','mdname'=>'网络售价','mdprice'=>'39.80'),
    array('sku'=>'C7863721','mdname'=>'网络售价','mdprice'=>'42.00'),
    array('sku'=>'G7760131','mdname'=>'网络售价','mdprice'=>'16.00'),
    array('sku'=>'G4004790','mdname'=>'网络售价','mdprice'=>'19.80'),
    array('sku'=>'F6787329','mdname'=>'网络售价','mdprice'=>'66.00'),
    array('sku'=>'G6509660','mdname'=>'网络售价','mdprice'=>'59.80'),
    array('sku'=>'G3390845','mdname'=>'网络售价','mdprice'=>'39.80'),
    array('sku'=>'D2187915','mdname'=>'网络售价','mdprice'=>'45.00'),
    array('sku'=>'D6002613','mdname'=>'网络售价','mdprice'=>'118.00'),
    array('sku'=>'C8969429','mdname'=>'网络售价','mdprice'=>'133.80'),
    array('sku'=>'C4789198','mdname'=>'网络售价','mdprice'=>'198.00')
    //@floor_1
  );
  $floor_n1 = $this->model_product->getProductRowByInCustom($floor_n1);

  // 纸品湿巾
  $floor_0 = array(
    //@floor_2
    array('sku'=>'BN9261062','mdname'=>'网络售价','mdprice'=>'20.00'),
    array('sku'=>'BN9572373','mdname'=>'网络售价','mdprice'=>'25.90'),
    array('sku'=>'BN9581334','mdname'=>'网络售价','mdprice'=>'18.60'),
    array('sku'=>'BN9581351','mdname'=>'网络售价','mdprice'=>'29.00'),
    array('sku'=>'BN9581362','mdname'=>'网络售价','mdprice'=>'29.00'),
    array('sku'=>'BN9581383','mdname'=>'网络售价','mdprice'=>'22.90'),
    array('sku'=>'BN9471657','mdname'=>'网络售价','mdprice'=>'19.80'),
    array('sku'=>'BN9451395','mdname'=>'网络售价','mdprice'=>'59.00'),
    array('sku'=>'BN9409897','mdname'=>'网络售价','mdprice'=>'14.00'),
    array('sku'=>'BN9418695','mdname'=>'网络售价','mdprice'=>'45.00'),
    array('sku'=>'BN9408878','mdname'=>'网络售价','mdprice'=>'15.00'),
    array('sku'=>'BN9410058','mdname'=>'网络售价','mdprice'=>'24.00'),
    array('sku'=>'BN9451371','mdname'=>'网络售价','mdprice'=>'39.00'),
    array('sku'=>'E6691198','mdname'=>'网络售价','mdprice'=>'32.00')
    //@floor_2
  );
  $floor_0 = $this->model_product->getProductRowByInCustom($floor_0);



  // 炖煮煲类
  $floor_1 = array(
    //@floor_3
    array('sku'=>'A2630476','mdname'=>'网络售价','mdprice'=>'199.00'),
    array('sku'=>'A5516325','mdname'=>'网络售价','mdprice'=>'109.00'),
    array('sku'=>'A5227150','mdname'=>'网络售价','mdprice'=>'129.00'),
    array('sku'=>'A5916694','mdname'=>'网络售价','mdprice'=>'168.00'),
    array('sku'=>'A3301693','mdname'=>'网络售价','mdprice'=>'259.00'),
    array('sku'=>'a1162484','mdname'=>'网络售价','mdprice'=>'249.00'),
    array('sku'=>'A8770885','mdname'=>'网络售价','mdprice'=>'259.00'),
    array('sku'=>'A3747579','mdname'=>'网络售价','mdprice'=>'149.00'),
    array('sku'=>'A5227357','mdname'=>'网络售价','mdprice'=>'359.00'),
    array('sku'=>'A3635263','mdname'=>'网络售价','mdprice'=>'129.00'),
    array('sku'=>'A7802337','mdname'=>'网络售价','mdprice'=>'319.00')
    //@floor_3
  );
  $floor_1 = $this->model_product->getProductRowByInCustom($floor_1);



    // 抱枕地毯
  $floor_2 = array(
    array('sku'=>'C7613704','mdname'=>'网络售价','mdprice'=>'42.00'),
    array('sku'=>'C2613427','mdname'=>'网络售价','mdprice'=>'79.00'),
    array('sku'=>'C1625207','mdname'=>'网络售价','mdprice'=>'38.00'),
    array('sku'=>'C7158456','mdname'=>'网络售价','mdprice'=>'57.80'),
    array('sku'=>'C9201072','mdname'=>'网络售价','mdprice'=>'119.80'),
    array('sku'=>'G9261093','mdname'=>'网络售价','mdprice'=>'11.00'),
    array('sku'=>'G6031758','mdname'=>'网络售价','mdprice'=>'29.00'),
    array('sku'=>'G7583939','mdname'=>'网络售价','mdprice'=>'75.00'),
    array('sku'=>'G4501250','mdname'=>'网络售价','mdprice'=>'36.00'),
    array('sku'=>'G9662583','mdname'=>'网络售价','mdprice'=>'50.00'),
    array('sku'=>'G1335171','mdname'=>'网络售价','mdprice'=>'99.00'),
    array('sku'=>'G1338873','mdname'=>'网络售价','mdprice'=>'99.00'),
    array('sku'=>'G9308446','mdname'=>'网络售价','mdprice'=>'269.00'),
    array('sku'=>'G9198543','mdname'=>'网络售价','mdprice'=>'11.00'),
    array('sku'=>'G1604891','mdname'=>'网络售价','mdprice'=>'10.00')
  );
  $floor_2 = $this->model_product->getProductRowByInCustom($floor_2);

  //夏凉净化
  $floor_3 = array(
    array('sku'=>'D6315380','mdname'=>'网络售价','mdprice'=>'399.00'),
    array('sku'=>'A8256091','mdname'=>'网络售价','mdprice'=>'99.00'),
    array('sku'=>'A2274078','mdname'=>'网络售价','mdprice'=>'296.00'),
    array('sku'=>'A5016856','mdname'=>'网络售价','mdprice'=>'240.00'),
    array('sku'=>'A4390517','mdname'=>'网络售价','mdprice'=>'209.00'),
    array('sku'=>'A4155116','mdname'=>'网络售价','mdprice'=>'129.00'),
    array('sku'=>'A7109140','mdname'=>'网络售价','mdprice'=>'155.00'),
    array('sku'=>'A7420397','mdname'=>'网络售价','mdprice'=>'249.00'),
    array('sku'=>'A8471235','mdname'=>'网络售价','mdprice'=>'238.00'),
    array('sku'=>'A2526100','mdname'=>'网络售价','mdprice'=>'209.00'),
    array('sku'=>'A6720570','mdname'=>'网络售价','mdprice'=>'258.00')
  );
  $floor_3 = $this->model_product->getProductRowByInCustom($floor_3);

  // 餐具锅具
  $floor_4 = array(
    array('sku'=>'B7715364','mdname'=>'网络售价','mdprice'=>'70.90'),
    array('sku'=>'B5461066','mdname'=>'网络售价','mdprice'=>'298.00'),
    array('sku'=>'B7331880','mdname'=>'网络售价','mdprice'=>'79.00'),
    array('sku'=>'B6294950','mdname'=>'网络售价','mdprice'=>'129.00'),
    array('sku'=>'B3359163','mdname'=>'网络售价','mdprice'=>'139.00'),
    array('sku'=>'B1148774','mdname'=>'网络售价','mdprice'=>'39.00'),
    array('sku'=>'B1253441','mdname'=>'网络售价','mdprice'=>'69.00'),
    array('sku'=>'B5358292','mdname'=>'网络售价','mdprice'=>'199.00'),
    array('sku'=>'B5707866','mdname'=>'网络售价','mdprice'=>'150.00'),
    array('sku'=>'B2509967','mdname'=>'网络售价','mdprice'=>'39.90'),
    array('sku'=>'B4603290','mdname'=>'网络售价','mdprice'=>'299.00'),
    array('sku'=>'B1212241','mdname'=>'网络售价','mdprice'=>'69.00'),
    array('sku'=>'B5310317','mdname'=>'网络售价','mdprice'=>'99.00'),
    array('sku'=>'B1125897','mdname'=>'网络售价','mdprice'=>'45.00')
  );
  $floor_4 = $this->model_product->getProductRowByInCustom($floor_4);

  // 清洁洗涤
  $floor_5 = array(
    array('sku'=>'E8356380','mdname'=>'网络售价','mdprice'=>'52.80'),
    array('sku'=>'E9510924','mdname'=>'网络售价','mdprice'=>'24.90'),
    array('sku'=>'E1143059','mdname'=>'网络售价','mdprice'=>'39.00'),
    array('sku'=>'E8782695','mdname'=>'网络售价','mdprice'=>'30.00'),
    array('sku'=>'E2318247','mdname'=>'网络售价','mdprice'=>'90.00'),
    array('sku'=>'E5160344','mdname'=>'网络售价','mdprice'=>'48.00'),
    array('sku'=>'E1357188','mdname'=>'网络售价','mdprice'=>'98.00'),
    array('sku'=>'E7049020','mdname'=>'网络售价','mdprice'=>'79.00'),
    array('sku'=>'E2223564','mdname'=>'网络售价','mdprice'=>'99.00'),
    array('sku'=>'E1981919','mdname'=>'网络售价','mdprice'=>'60.00'),
    array('sku'=>'E1847002','mdname'=>'网络售价','mdprice'=>'59.00'),
    // array('sku'=>'E7364750','mdname'=>'网络售价','mdprice'=>'24.00'),
    array('sku'=>'E1495258','mdname'=>'网络售价','mdprice'=>'58.00'),
    array('sku'=>'E9594198','mdname'=>'网络售价','mdprice'=>'69.00'),
    array('sku'=>'E4611348','mdname'=>'网络售价','mdprice'=>'18.90'),
    array('sku'=>'E4271946','mdname'=>'网络售价','mdprice'=>'48.00'),
    array('sku'=>'E7169298','mdname'=>'网络售价','mdprice'=>'79.00'),
    array('sku'=>'E1265235','mdname'=>'网络售价','mdprice'=>'159.90'),
    array('sku'=>'E7648370','mdname'=>'网络售价','mdprice'=>'29.90'),
    array('sku'=>'E2438953','mdname'=>'网络售价','mdprice'=>'34.90')
  );
  $floor_5 = $this->model_product->getProductRowByInCustom($floor_5);

  // 家具装饰
  $floor_6 = array(
    array('sku'=>'F8105592','mdname'=>'网络售价','mdprice'=>'84.00'),
    array('sku'=>'F4219325','mdname'=>'网络售价','mdprice'=>'109.00'),
    array('sku'=>'f8505610','mdname'=>'网络售价','mdprice'=>'90.00'),
    array('sku'=>'F6241743','mdname'=>'网络售价','mdprice'=>'98.00'),
    array('sku'=>'F7704644','mdname'=>'网络售价','mdprice'=>'138.00'),
    array('sku'=>'F5323707','mdname'=>'网络售价','mdprice'=>'65.00'),
    array('sku'=>'f8235655','mdname'=>'网络售价','mdprice'=>'198.00'),
    array('sku'=>'f5521080','mdname'=>'网络售价','mdprice'=>'65.00'),
    array('sku'=>'f1360491','mdname'=>'网络售价','mdprice'=>'65.00'),
    array('sku'=>'F2875745','mdname'=>'网络售价','mdprice'=>'269.00'),
    array('sku'=>'G6509660','mdname'=>'网络售价','mdprice'=>'69.00'),
    // array('sku'=>'F1308149','mdname'=>'网络售价','mdprice'=>'138.00'),
    // array('sku'=>'F4219325','mdname'=>'网络售价','mdprice'=>'109.00'),
    // array('sku'=>'F1796754','mdname'=>'网络售价','mdprice'=>'269.00'),
    array('sku'=>'F4803867','mdname'=>'网络售价','mdprice'=>'118.00'),
    array('sku'=>'F2102500','mdname'=>'网络售价','mdprice'=>'99.00'),
    array('sku'=>'F2986379','mdname'=>'网络售价','mdprice'=>'148.00'),
    array('sku'=>'F9011310','mdname'=>'网络售价','mdprice'=>'149.00')
    //array('sku'=>'F3765451','mdname'=>'网络售价','mdprice'=>'65.00')
  );
  $floor_6 = $this->model_product->getProductRowByInCustom($floor_6);

  // 套件毛毯
  $floor_7 = array(
    array('sku'=>'C9357549','mdname'=>'网络售价','mdprice'=>'458.00'),
    array('sku'=>'C2123242','mdname'=>'网络售价','mdprice'=>'2398.00'),
    array('sku'=>'C6416992','mdname'=>'网络售价','mdprice'=>'428.00'),
    array('sku'=>'C1472329','mdname'=>'网络售价','mdprice'=>'599.00'),
    array('sku'=>'C5502800','mdname'=>'网络售价','mdprice'=>'499.00'),
    array('sku'=>'C1637799','mdname'=>'网络售价','mdprice'=>'499.00'),
    array('sku'=>'C2990250','mdname'=>'网络售价','mdprice'=>'499.00'),
    array('sku'=>'C2104055','mdname'=>'网络售价','mdprice'=>'499.00'),
    array('sku'=>'C9237785','mdname'=>'网络售价','mdprice'=>'38.00'),
    array('sku'=>'C8940030','mdname'=>'网络售价','mdprice'=>'32.00'),
    array('sku'=>'C8723768','mdname'=>'网络售价','mdprice'=>'42.00'),

  );
  $floor_7 = $this->model_product->getProductRowByInCustom($floor_7);

  // 龙头家装
  $floor_8 = array(
    array('sku'=>'I6405776','mdname'=>'网络售价','mdprice'=>'128.00'),
    array('sku'=>'I4672995','mdname'=>'网络售价','mdprice'=>'40.00'),
    array('sku'=>'I8823456','mdname'=>'网络售价','mdprice'=>'25.00'),
    array('sku'=>'I9840122','mdname'=>'网络售价','mdprice'=>'35.00'),
    array('sku'=>'A2195254','mdname'=>'网络售价','mdprice'=>'49.00'),
    array('sku'=>'H5080300','mdname'=>'网络售价','mdprice'=>'36.00'),
    array('sku'=>'I2702139','mdname'=>'网络售价','mdprice'=>'19.00'),
    array('sku'=>'I8921334','mdname'=>'网络售价','mdprice'=>'149.00'),
    array('sku'=>'I6548588','mdname'=>'网络售价','mdprice'=>'58.00'),
    array('sku'=>'I3112886','mdname'=>'网络售价','mdprice'=>'43.90'),
    array('sku'=>'I2618988','mdname'=>'网络售价','mdprice'=>'150.00')
  );
  $floor_8 = $this->model_product->getProductRowByInCustom($floor_8);

  // 超值数码
  $floor_9 = array(
    array('sku'=>'H8715424','mdname'=>'网络售价','mdprice'=>'89.00'),
    array('sku'=>'A1149089','mdname'=>'网络售价','mdprice'=>'99.00'),
    array('sku'=>'H5043076','mdname'=>'网络售价','mdprice'=>'69.00'),
    array('sku'=>'H7258439','mdname'=>'网络售价','mdprice'=>'89.00'),
    array('sku'=>'H5843010','mdname'=>'网络售价','mdprice'=>'129.00'),

    array('sku'=>'H6646504','mdname'=>'网络售价','mdprice'=>'39.00'),
    array('sku'=>'H5998847','mdname'=>'网络售价','mdprice'=>'65.00'),
    array('sku'=>'A5235115','mdname'=>'网络售价','mdprice'=>'139.00'),
    array('sku'=>'A1349018','mdname'=>'网络售价','mdprice'=>'119.90'),
    array('sku'=>'H9094048','mdname'=>'网络售价','mdprice'=>'19.90'),
    array('sku'=>'A7732311','mdname'=>'网络售价','mdprice'=>'99.00'),
    array('sku'=>'H9765573','mdname'=>'网络售价','mdprice'=>'49.90'),
    array('sku'=>'H4530511','mdname'=>'网络售价','mdprice'=>'89.00'),
    array('sku'=>'A9077018','mdname'=>'网络售价','mdprice'=>'68.90'),
    array('sku'=>'A7525928','mdname'=>'网络售价','mdprice'=>'38.00')
  );
  $floor_9 = $this->model_product->getProductRowByInCustom($floor_9);

  $floors  = array(
    array(
      'id'=>'floorn1',
      'title'=>'家纺家具',
      'bannerUrl'=>'',
      'bannerImage'=>$bannerImageURL.'banner-n1.jpg',
      'items'=>$floor_n1
    ),
    array(
      'id'=>'floor00',
      'title'=>'纸品湿巾半价专场',
      'bannerUrl'=>'http://list.feifei.com/3055.html',
      'bannerImage'=>$bannerImageURL.'banner01.jpg',
      //'recommandTitle'=>'个性设计 家中童话',
      'items'=>$floor_0
    ),
    array(
      'id'=>'floor01',
      'title'=>'炖煮煲类半价专场',
      'bannerUrl'=>'http://list.feifei.com/3055.html',
      'bannerImage'=>$bannerImageURL.'banner02_0325.jpg',
      //'recommandTitle'=>'个性设计 家中童话',
      'items'=>$floor_1
    ),
    array(
      'id'=>'floor02',
      'title'=>'抱枕地毯半价专场',
      'bannerUrl'=>'http://list.feifei.com/3055.html',
      'bannerImage'=>$bannerImageURL.'banner03_0325.jpg',
      //'recommandTitle'=>'个性设计 家中童话',
      'items'=>$floor_2
    ),
    array(
      'id'=>'floor03',
      'title'=>'夏凉净化半价专场',
      'bannerUrl'=>'',
      'bannerImage'=>$bannerImageURL.'banner04_0325.jpg',
      //'recommandTitle'=>'个性设计 家中童话',
      'items'=>$floor_3
    ),
    array(
      'id'=>'floor04',
      'title'=>'餐具锅具半价专场',
      'bannerUrl'=>'',
      'bannerImage'=>$bannerImageURL.'banner05.jpg',
      //'recommandTitle'=>'',
      'items'=>$floor_4
    ),
    array(
      'id'=>'floor05',
      'title'=>'清洁洗涤半价专场',
      'bannerUrl'=>'',
      'bannerImage'=>$bannerImageURL.'banner06.jpg',
      //'recommandTitle'=>'个性设计 家中童话',
      'items'=>$floor_5
    ),
    array(
      'id'=>'floor06',
      'title'=>'家具装饰半价专场',
      'bannerUrl'=>'',
      'bannerImage'=>$bannerImageURL.'banner07.jpg',
      //'recommandTitle'=>'',
      'items'=>$floor_6
    ),
    array(
      'id'=>'floor07',
      'title'=>'套件毛毯半价专场',
      'bannerUrl'=>'http://list.feifei.com/3055.html',
      'bannerImage'=>$bannerImageURL.'banner08_0325.jpg',
      //'recommandTitle'=>'个性设计 家中童话',
      'items'=>$floor_7
    ),
     array(
      'id'=>'floor09',
      'title'=>'超值数码半价专场',
      'bannerUrl'=>'',
      'bannerImage'=>$bannerImageURL.'banner10.jpg',
      //'recommandTitle'=>'个性设计 家中童话',
      'items'=>$floor_9
    )
  );
  $this->floors = $floors;

  $this->display('pages/fansday.tpl');
?>