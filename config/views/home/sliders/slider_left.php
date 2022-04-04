 <li data-index="rs-1" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="<?php echo base_url(); ?>public/uploads/slider/<?php echo $slider['photo']; ?>"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
     <!-- MAIN IMAGE -->
     <img src="<?php echo base_url(); ?>public/uploads/slider/<?php echo $slider['photo']; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
     <!-- LAYERS -->
      <!-- Overlay -->
      <div class="gradient-bg1 bg-overlay opacity-8 z-index-1 slider-dark"></div>

     <!-- LAYER NR. 1 -->
     <?php  if(!empty($slider['text_01'])) { ?>
     <div class="tp-caption   tp-resizeme"
          id="slide-91-layer-1"
          data-x="['left','left','center','center']" data-hoffset="['0','50','0','0']"
          data-y="['top','top','middle','middle']" data-voffset="['309','262','-106','-110']"
          data-fontsize="['16','16','16','14']"
          data-width="none"
          data-height="none"
          data-whitespace="nowrap"

          data-type="text"
          data-responsive_offset="on"

          data-frames='[{"delay":200,"speed":900,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":900,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
          data-textAlign="['inherit','inherit','center','center']"
          data-paddingtop="[0,0,0,0]"
          data-paddingright="[0,0,0,0]"
          data-paddingbottom="[0,0,0,0]"
          data-paddingleft="[0,0,0,0]"

          style="z-index: 5; white-space: nowrap; font-size: 16px; line-height: 20px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Roboto;">
               <?php echo nl2br($slider['text_01']); ?>
     </div>

     <!-- LAYER NR. 2 -->
     <?php } if(!empty($slider['text_02'])) { ?>
     <div class="tp-caption   tp-resizeme"
          id="slide-91-layer-2"
          data-x="['left','left','center','center']" data-hoffset="['0','50','0','0']"
          data-y="['top','top','top','top']" data-voffset="['357','309','404','266']"
          data-fontsize="['18','18','18','14']"
          data-width="none"
          data-height="none"
          data-whitespace="nowrap"

          data-type="text"
          data-responsive_offset="on"

          data-frames='[{"delay":720,"split":"chars","splitdelay":0.1,"speed":900,"split_direction":"forward","frame":"0","from":"sX:0.8;sY:0.8;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":900,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
          data-textAlign="['inherit','inherit','center','center']"
          data-paddingtop="[0,0,0,0]"
          data-paddingright="[0,0,0,0]"
          data-paddingbottom="[0,0,0,0]"
          data-paddingleft="[0,0,0,0]"

          style="z-index: 6; white-space: nowrap; font-size: 50px; line-height: 50px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Raleway, sans-serif; ">
               <?php echo nl2br($slider['text_02']); ?>
     </div>
     
     <?php }  if(!empty($slider['text_03'])) { ?>
     <!-- LAYER NR. 3 -->
     <div class="tp-caption   tp-resizeme"
          id="slide-91-layer-3"
          data-x="['left','left','center','center']" data-hoffset="['0','50','0','0']"
          data-y="['middle','middle','middle','middle']" data-voffset="['10','10','0','-30']"
          data-fontsize="['50','30','20','16']"
          data-width="none"
          data-height="none"
          data-whitespace="nowrap"

          data-type="text"
          data-responsive_offset="on"

          data-frames='[{"delay":1290,"speed":900,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":900,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
          data-textAlign="['inherit','inherit','center','center']"
          data-paddingtop="[0,0,0,0]"
          data-paddingright="[0,0,0,0]"
          data-paddingbottom="[0,0,0,0]"
          data-paddingleft="[0,0,0,0]"

          style="z-index: 7; white-space: nowrap; font-size: 40px; line-height: 50px; font-weight: 500; color: #ffffff; letter-spacing: 0px;font-family:Raleway, sans-serif;"><?php echo nl2br($slider['text_03']); ?>
     </div>

     <!-- LAYER NR. 4 -->
     <?php } if(!empty($slider['text_04'])) { ?>
     <div class="tp-caption   tp-resizeme"
          id="slide-91-layer-4"
          data-x="['left','left','center','center']" data-hoffset="['0','50','1','-1']"
          data-y="['top','top','middle','middle']" data-voffset="['484','447','71','29']"
          data-fontsize="['16','16','16','14']"
          data-lineheight="['22','22','22','18']"
          data-width="['601','530','601','450']"
          data-height="none"
          data-whitespace="normal"

          data-type="text"
          data-responsive_offset="on"

          data-frames='[{"delay":1680,"speed":900,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":900,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
          data-textAlign="['inherit','inherit','center','center']"
          data-paddingtop="[0,0,0,0]"
          data-paddingright="[0,0,0,0]"
          data-paddingbottom="[0,0,0,0]"
          data-paddingleft="[0,0,0,0]"

          style="z-index: 8; min-width: 601px; max-width: 601px; white-space: normal; font-size: 16px; line-height: 22px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Roboto;">
               <?php echo nl2br($slider['text_04']); ?>
     </div>

     <!-- LAYER NR. 12 -->
     <?php } if(!empty($slider['btn_url'])) { ?>
     <div class="tp-caption   tp-resizeme"
          data-x="['left','left','center','center']" data-hoffset="['0','50','0','0']"
          data-y="['top','top','middle','middle']" data-voffset="['586','560','164','110']"
          data-width="['601','530','601','450']"
          data-height="none"
          data-whitespace="nowrap"

          data-type="text"
          data-responsive_offset="on"

          data-frames='[{"delay":2150,"speed":900,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":900,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
          data-textAlign="['inherit','inherit','center','center']"
          data-paddingtop="[0,0,0,0]"
          data-paddingright="[0,0,0,0]"
          data-paddingbottom="[0,0,0,0]"
          data-paddingleft="[0,0,0,0]"

          style="z-index: 9; letter-spacing: .5px;">
          <a class="white clr-g hvr-shutter-out-horizontal-blk btn btn-large btn-rounded scroll"
           href="<?php echo $slider['btn_url']; ?>">
           <?php echo nl2br($slider['btn_text']); ?></a>
          
      </div>
      <?php } ?>

 </li>
