<?php include("./database/services/forumService.php")?>
<?php 
    $forums = ForumService::readData();
?>
<div class="forum-container">
    <h3 class="forum-title">Recent Topics</h3>
    <ul class="forum-items">
       <?php foreach ($forums as $forum) :?>
        <li class="forum-item">
        <a href="#" onclick="toggleForumChat(this)">
            <span class="fa fa-regular fa-comments"></span>
            <?php echo $forum["Name"]?>
        </a>
        </li>
        <?php endforeach?>
    </ul>
</div> 