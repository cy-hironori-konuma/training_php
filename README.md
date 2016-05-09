# スポット研修 PHP

# 目的  

* 動的なコンテンツを配信する仕組みを学ぶ
* DBの参照・追加・更新を体験して理解する

# 当日の流れ  

環境構築は事前に行ってもらう？  
その前の研修で実施済み？

- 静的なコンテンツと動的なコンテンツの違い
- 環境構築
- 実習
 - HTMLでフォーム部分作成
 - POST/GETで受け取ったデータを表示
 - テーブル設計(?)
 - テーブル作成(?)
 - 既存データ参照
 - データ登録
 - データ更新
- 解説

# 静的なコンテンツと動的なコンテンツの違い  

Webページには**静的コンテンツ**と**動的コンテンツ**があります。  
**静的コンテンツ**とは、どのユーザがいつアクセスしても同じ内容が表示され続けるページのことです。  
index.html などのように、リクエストURLに指定されたhtmlなどのデータが、そのままレスポンスデータとして返る方式のWebページのことです。 
**動的コンテンツ**とは、ユーザーからリクエストがあってから初めてページを作り表示するページのことを指します。  
search.php?q=hogehoge などのように、クエリと呼ばれるパラメータがリクエストデータとして送信され、これを受信したWebサーバがプログラム上でパラメータに合わせた処理を実行して、レスポンスデータを生成し返却する方式のWebページのことです。  

# 環境構築

# HTMLでフォーム部分作成
