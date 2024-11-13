<?php
echo '
        ※リモートリポジトリの作成とローカルとの紐付け
            1.Githubにリモートリポジトリを作成する。
            2.フォルダーを作成し、そのフォルダーに入る
            3.git initでGit管理下に置く
            4.git remote add origin リモートリポジトリのパス でローカルとリモートを紐づけ
            5.git commit --allow-empty -m "first commit" で空コミットする
            6.git branch -M mainでデフォルトをmainにする
            7.git push -u origin mainでリモートリポジトリにmainブランチを登録する

        ※ブランチ作成
            8.git checkout -b developでdevelopブランチを作成
            9.git push -u origin developでリモートリポジトリにdevelopブランチを登録する
        
            10.8.9の手順でfeature/exampleブランチを作成

        ※git push(同じフォルダー内のファイルでもブランチを分けることで並行作業ができる)
            11.git checkout ブランチ名でpushするファイルの担当ブランチに移動する
            12.git add ファイル名
            13.git commit -m "コミットメッセージ"
            14.git push
            15.GithubのPull requestsでプルリクエストする（プルリクする方向に注意）
        
        ※merge

';