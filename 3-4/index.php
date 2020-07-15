<?php

require_once("getData.php");
$getData = new getData();
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="wrapper">
        <div class="header clearfix">
            <!-- ロゴ -->
            <div class="header_left">
                <img src="logo.png" alt="logo.png">
            </div>
            <div class="header_right">
                <!-- ユーザーネーム -->
                <div class="user_name clearfix">
                    <p class="top">ようこそ
                        <?php 
                            try{
                                $name = $getData->getUserData();
                                echo $name['last_name'].$name['first_name'];
                            } catch(PDOException $e){
                                echo $e->getMessage();
                                die();
                            }
                        ?>
                        さん
                    </p>
                </div>
                <!-- 最終ログイン日 -->
                <div class="last_login clearfix">
                    <p class="top">最終ログイン日：
                        <?php 
                            try{
                                $name = $getData->getUserData();
                                echo $name['last_login'];
                            } catch(PDOException $e){
                                echo $e->getMessage();
                                die();
                            }
                        ?>
                    </p>   
                </div>
            </div>
        </div>

        <!-- ブログ記事 -->
        <div class="main clearfix">

            <!-- 記事ID -->
            <div class="main_id f_l">
                <p class="heading">記事ID</p>
                    <?php
                        
                        try{
                            foreach($getData->getPostData() as $topic){?>
                                <p class="contents"><?php echo $topic['id'];?></p>
                                <?php
                            }
                        }catch(PDOException $e){
                            echo $e->getMessage();
                            die();
                        }
                    ?>
            </div>
            <!-- タイトル -->
            <div class="main_title f_l">
                <p class="heading">タイトル</p>
                    <?php
                        try{
                            foreach($getData->getPostData() as $topic){?>
                               <p class="contents"><?php echo $topic['title'];?></p>
                            <?php
                            }
                        }catch(PDOException $e){
                            echo $e->getMessage();
                            die();
                        }
                    ?>
            </div>
            <!-- カテゴリ -->
            <div class="main_category f_l">
                <p class="heading">カテゴリ</p>
                    <?php
                        
                        try{
                            foreach($getData->getPostData() as $topic){
                                if($topic['category_no'] == 1){?>
                                    <p class="contents">食事</p> 
                          <?php }elseif($topic['category_no'] == 2){ ?>
                                    <p class="contents">旅行</p> 
                          <?php }else{ ?>
                                    <p class="contents">その他</p> <?php
                                } 
                            }
                        }catch(PDOException $e){
                            echo $e->getMessage();
                            die();
                        }
                    ?>
            </div>
            <!-- 本文 -->
            <div class="main_comment f_l">
                <p class="heading">本文</p>
                    <?php
                        
                        try{
                            foreach($getData->getPostData() as $topic){ ?>
                                <p class="contents"><?php echo $topic['comment'];?></p>
                                <?php
                            }
                        }catch(PDOException $e){
                            echo $e->getMessage();
                            die();
                        }
                    ?>
            </div>
            <!-- 投稿日 -->
            <div class="main_created f_l">
                <p class="heading">投稿日</p>
                    <?php
                        
                        try{
                            foreach($getData->getPostData() as $topic){?>
                                <p class="contents"><?php echo $topic['created'];?></p>
                                <?php
                            }
                        }catch(PDOException $e){
                            echo $e->getMessage();
                            die();
                        }
                    ?>
            </div>
            
        </div>

        <!-- フッター -->
        <div class="footer">
            <p>Y&I group.inc</p>
        </div>
    
    </div>
</body>
</html>