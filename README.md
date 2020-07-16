# 〜就活状況管理アプリ〜

# 使用言語、フレームワーク、データベース
- PHP (ver 7.4.7)
- Laravel (ver 7.19.0)
- Bootstrap
- JavaScript
- MySQL

# このアプリでできる事
- ユーザー登録・ログイン
- 選考中の会社を登録、管理
- 会社に紐付いた面接予定を登録
- トップページで応募企業一覧や直近の面接を確認

# 実装内容
- 基本的なCRUD
- 計5テーブル間のリレーション
- バリデーション
- クエリスコープ
- ユーザー認証
- pagination
- flatpickrを使用したスケジュール登録
- config内でキーとバリュー管理

# 参考動画
![就活状況管理アプリ](https://user-images.githubusercontent.com/62419040/87724381-56c73700-c7f6-11ea-9d4a-c24805206ba7.gif)
※収録時間20秒
※ローカルで挙動をご確認頂ける場合は、seedファイルに参考データが登録されています。
 DB名：'todo_employment_activities'、パスワード未登録です。
 
# ER図
[就活状況管理アプリ.pdf](https://github.com/Toshi-Yano/todo_employment_activities/files/4934008/default.pdf)

# 今後の取り組み
- 非同期での検索、並べ替え（選考中 or お見送りなど）
- ルーティングのリファクタリング
- 応募状況の集計データを表示
- デプロイ
