<?php $projects=$this->requestAction('Projects/index'); ?>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <?php echo $this->html->link('Valentin Siegel', array('controller' => 'pages', 'action' => 'display', 'home'), array('class' => 'navbar-brand')); ?>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">            
        <li class="dropdown">
        <?php echo $this->html->link('Projects', array('controller' => 'projects' , 'action' => 'index'), array('class' => 'button')); ?>
          <ul class="dropdown-menu">
            <?php
              foreach ($projects as $project) {
              echo "<li>".$this->html->link($project["Project"]["name"], array('controller' => 'projects' , 'action' => 'view' , $project["Project"]["id"]))."</li>";
            } ?>
          </ul>
        </li>
<!--          <li><a href="./cv">CV</a></li> -->
        <li><?php echo $this->html->link('CV', array('controller' => 'pages', 'action' => 'display' , 'cv')); ?></li>
<!--         <li><a href="./contact">Contact</a></li> -->
        <li>
        <?php echo $this->html->link('Contact', array('action' => 'cv')); ?>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
<script type="text/javascript">$('.dropdown-toggle').dropdown()</script>