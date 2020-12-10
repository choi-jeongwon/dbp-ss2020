##### :star: 컴퓨터공학과 20176189 최정원


# :white_check_mark: 실습 동작 화면
*  https://youtu.be/FRmWs2HlNYM 고화질로 선택하여 시청해주시면 감사하겠습니다.

# :white_check_mark: 새로 배운 내용
* MongoDB: 2009년 발표된 Document-Oriented(문서지향적) NoSQL 데이터베이스이다. 오픈 소스이며 엔진은 C++로 작성되었다. 
* MongoDB - Document 생성 예시
```
> mongo
> use testDB
> db.myCollection.insertOne({x:1})
> db.myCollection.insertMany([{x:2, y:3}, {x:4, y:5}, {x:6, y:[7,8,9]}])
```
* MongoDB - Document 조회 예시
```
> db.myCollection.find()
> db.myCollection.find({x:1})
> db.myCollection.find({"y.0": 7})
> db.myCollection.find({x:6},{y:false})
> var cursor = db.myCollection.find()
> cursor.next()
> cursor.hasNext()
```
* MongoDB - Document 수정 예시
```
> db.myCollection.replaceOne({x:2}, {x:10, y:11})
> db.myCollection.find({x:10})
> db.myCollection.replaceOne({x:12}, {x:12, y:[13,14]}, {upsert:true})
> db.myCollection.find({x:4})
> db.myCollection.updateMany({x:4}, {$set: {y:15}})
> db.myCollection.find({x:4})
> db.myCollection.updateMany({x:6},{$set:{"y.$[e]":17}},{arrayFilters:[{e:7}]})
> db.myCollection.find({x:6})
```
* MongoDB - Document 삭제 예시
```
> db.myCollection.deleteOne({x:1})
> db.myCollection.deleteMany({})
> db.myCollection.find()
```

# :white_check_mark: 문제가 발생하거나 고민한 내용 + 해결 과정
* 이번 실습에서는 특별히 오류가 발생하지 않았다. 다만 이전에 MongoDB를 설치해두었기 때문에 환경변수 설정에서 버전만 바꾸어 주었다.

# :white_check_mark: 참고할 만한 내용
* https://poiemaweb.com/mongdb-basics MongoDB의 기본 개념과 설치

# :white_check_mark: 회고(+,-,!)
:heavy_plus_sign: 이전에 설치해두었던 MongoDB가 있어서 설치시간을 단축할 수 있었다.  
:heavy_plus_sign::heavy_minus_sign: 한학기동안 열심히 공부했던 데이터베이스프로그래밍 수업의 마지막 과제를 하면서 기쁘면서도 슬펐다.  
:exclamation: NoSQL이란 Not Only SQL의 약자로서 기존의 RDBMS(관계형 데이터베이스)의 한계를 극복하기 위한 새로운 형태의 데이터베이스이다.   