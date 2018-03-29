# MYOUAN

## ビルド

nodeJS が必要です。

```
$ npm install
$ npm run gulp build
```

## gulp

### WEBサーバーの立ち上げ。ファイルの監視・自動ビルド。

```
$ npm run gulp
```

Open [http://localhost:3000](http://localhost:3000) !

### ビルドのみ実行

```
$ npm run gulp build
```

## コーディング基準

* [WordPress コーディング基準](https://wpdocs.osdn.jp/WordPress_%E3%82%B3%E3%83%BC%E3%83%87%E3%82%A3%E3%83%B3%E3%82%B0%E5%9F%BA%E6%BA%96)に準ずる。

## CSS 設計

基本は [FLOCSS](https://github.com/hiloki/flocss)。ただし、WordPress が出力する class や Bootstrap の class は BEM ではないので

* なるべくオリジナルの class を付与してそこにスタイルを当てる。
* 上記が難しい場合は foundation 層に WordPerss、Bootstrap の class を定義し上書きする。
* 各 Block には直接 position や margin を指定しない（どこにでも設置できる状態を保つ）。
* position や margin の指定や layout 層や object 層で定義する。

## Git 運用

基本的に develop で運用する。ビルドされるファイル（css、js）は Git から除外するが、リリース時には必要となるため別途運用を検討する。
