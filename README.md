# [BFVTW 社群外掛回報系統](https://rogeraabbccdd.github.io/BFVTW-Hackers/)

BFV 台灣社群外掛回報系統，每小時從 [battlefieldtracker](https://battlefieldtracker.com/) 抓取玩家資料，若擊殺數超過兩周沒有變動的話視為已封鎖  
   
![screenshot](./screenshot.jpg)

## 系統需求
- PHP
- MYSQL
- APACHE
- Node.js (開發用)
- Yarn (開發用)

## 安裝與建置
### 前台
- 切換至 `master` 分支
- 執行 `yarn` 安裝相依套件
- 在 `src/config.js` 填入設定
- `yarn serve` 開啟
- `yarn build` 建置
### 後台
- 切換至 `backend` 分支
- 將 `bfv.sql` 匯入資料庫
- 在 `configs.php` 填入設定
- 執行 `cornjob.php` 更新資料
- 設定排成工作，每隔一段時間執行 `cornjob.php` 更新資料

## API
本 GitHub 沒有任何玩家資料，若要存取資料請使用 API  
### 回報資料
- http://bfv.kento520.tw/data.php
```js
{
  // 總資料更新時間
  "last_update": "2020-02-03 16:00:01",
  // 玩家清單
  "hackers": [{
    "id": 1,
    // 玩家 ID
    "name": "",
    // 擊殺數
    "kills": 4182,
    // YouTube 檢舉影片ID
    "video": "",
    // 回報時間
    "report_date": "2020-01-01 01:23:23",
    // 擊殺數最後變動時間
    "last_update": "2020-02-02 18:42:26"
  }]
}
```
