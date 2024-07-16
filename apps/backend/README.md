## ディレクトリ構成案(Laravel10.x)

クリーンアーキテクチャ（DDD）の原則に従った以下の構成案を検討。
デザインパターン的には Repository パターン、Factory パターンを採用。

```
app/
├── Domain/：ドメイン層　ビジネスロジックやドメインオブジェクトを含む
│   ├── Entities/：ビジネスエンティティ　例：Book
│   │   └── Book/
│   │       └── Book.php
│   ├── Events/：イベント駆動用（複雑・複数ロジックになった場合使用）
│   │   └── BookAdded.php
│   ├── ValueObjects/：値オブジェクト　例：BookId
│   │   └── BookId.php
│   ├── Exceptions/：例外を管理
├── UseCases/：アプリケーションのビジネスロジックを実行するユースケースインタラクタとそのインターフェース
│   ├── Common/：共通のCRUD処理を記載した抽象クラス
│   │   └── BaseInteractor.php
│   │   └── BaseInteractorInterface.php
│   ├── Book/
│   │   ├── AddBook/
│   │   │   ├── AddBook.php: ユースケースのエントリポイント
│   │   │   ├── Request.php：ユースケースに渡されるリクエストデータ
│   │   │   ├── Response.php：ユースケースから返されるレスポンスデータ
│   │   │   ├── Interactor.php：ビジネスロジックを実装するインタラクタ
│   │   │   └── InteractorInterface.php：インタラクタのインターフェース
│   │   └── GetBook/
│   │       ├── GetBook.php
│   │       ├── Request.php
│   │       ├── Response.php
│   │       ├── Interactor.php
│   │       └── InteractorInterface.php
├── Infrastructure/：インフラストラクチャ層　データアクセスや外部サービスとの統合を扱う
│   ├── Common/
│   │   ├── RepositoryInterface.php：共通のCRUDメソッドをに対するインターフェース
│   ├── Book/
│   │   ├── BookRepositoryInterface.php：RepositoryInterfaceを継承
│   │   ├── Eloquent/
│   │   |    └── EloquentBookRepository.php：ORMを使用したリポジトリ実装
│   │   └── PostgreSQL/
│   │       └── PostgreBookRepository.php：生のPostgreSQLクエリを使用したリポジトリ実装
├── Http/
│   ├── Controllers/：コントローラ
│   │   ├── Api/
│   │       └── BookController.php
│   ├── Requests/：HTTPリクエストバリデーション
│   │   ├── Book/
│   │       └── AddBookRequest.php
│   ├── Resources/：HTTPレスポンスのリソース
│   │   ├── Book/
│   │       └── BookResource.php
│   └── Middleware/
└── Models/：Eloquent ORMを使用してデータベース操作を担当
        └── Book.php
└── Services/：外部サービスの実装
│       └── NotificationService.php
├── Providers/：InteractorとRepositoryクラスの依存注入
│   └── BookServiceProvider.php
```
