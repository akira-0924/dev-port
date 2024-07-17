# 作成中

## リポジトリルール

[モノレポ](https://www.atlassian.com/ja/git/tutorials/monorepos)

### ブランチ戦略

Git flow に従って以下のように管理する。

main ブランチ
本番環境用のビルドを作成するブランチ。必ず release-x.x.x ブランチからのみマージする。
release-x.x.x ブランチ
dev 環境用のビルドを作成するブランチ。最新の develop ブランチからこのブランチを作成する。
develop ブランチ
開発ブランチ。基本このブランチが最新となる。準備ができて dev 環境にリリースする場合はこのブランチから release ブランチを作成する。
feature ブランチ
作業ブランチ。develop ブランチから作成する。追加開発、や機能追加の対応はこのブランチを作成し、対応が完了したら develop ブランチへの MR を作成する。（機能開発を feature/〇〇、バグ・不具合修正を fix/〇〇）とする。
hotfix ブランチ
リリース後のクリティカルなバグフィックスなど、 現在のプロダクトのバージョンに対する変更用。 main ブランチから作成し、 main にマージする。次に develop ブランチにマージする。

## ディレクトリ構成

```console:ディレクトリ構成
.
├── apps
│   ├── admin
│   ├── backend
│   └── frontend
└── docs
    └── openapi.yaml
```

## ツール・環境類

- [Visual Studio Code](https://code.visualstudio.com/)
- [PHP 8.3](https://www.php.net/)
- [Node.js 20](https://nodejs.org/en/)
- [OpenAPI](https://swagger.io/specification/)
