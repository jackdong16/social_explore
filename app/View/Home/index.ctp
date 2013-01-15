    <div data-role="content" >  
        <center><?php echo $this->Html->image("map.png")?></center>

        <?php echo $this->Form->create("home", array('url' => '/home/search')); ?> 
            <?php echo $this->Form->text('search'); ?>
		<?php echo $this->Form->end('Search'); ?>
        
        <!--<a href="category/vancouver" data-role="button" data-mini="true" data-ajax="false">温哥华</a>  
        <a href="category/toronto" data-role="button" data-mini="true" data-ajax="false">多伦多</a>
    -->
    </div>