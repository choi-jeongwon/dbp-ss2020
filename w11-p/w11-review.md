##### :star: 컴퓨터공학과 20176189 최정원


# :white_check_mark: 실습 동작 화면
*  https://youtu.be/2uFL1XuGVrI 고화질로 선택하여 시청해주시면 감사하겠습니다.

# :white_check_mark: 새로 배운 내용
* 트랜잭션: DB의 상태를 변환시키는 하나의 논리적 기능을 수행하기 위한 작업의 단위
* 트랜잭션의 성질: 원자성, 일관성, 독립성, 지속성
* 자바에서 db로 쿼리문을 전송할 때 사용할 수 있는 인터페이스
1. Statement, PreparedStatement, CallableStatement
2. SQL 질의문을 전달하는 역할
3. 사용할 때 반드시 try catch 문 또는 throws 처리를 해야 함
* 리팩토링: 외부동작을 바꾸지 않으면서 내부 구조를 개선하는 방법으로, 소프트웨어 시스템을 변경하는 프로세스이다.


# :white_check_mark: 문제가 발생하거나 고민한 내용 + 해결 과정
* [ORA-00001: unique constraint () violated] 이라는 오류 메세지가 발생했는데, ORA-00001 은 무결성 제약 조건 에러로 테이블에 하나만 들어가야 되는 값들중 하나가 해당 키에 데이터가 들어가 있는데 그 키를 가지고 또 집어 넣으려고 할 경우에 생기는 에러라고 한다. 

# :white_check_mark: 참고할 만한 내용
* https://url.kr/mZFCB2 ORA-00001 ERROR 해결
* https://coding-factory.tistory.com/424 오라클 INSERT문 사용법 및 예제


# :white_check_mark: 회고(+,-,!)
:heavy_plus_sign: 이번 학기에 공부하고 있는 자바를 통해 CRUD 기능을 만들어 볼 수 있어 좋았다.  
:heavy_minus_sign: 데이터베이스를 수정 및 커밋하는 과정에서 헷갈리는 부분이 있어서 이번 실습 과제를 수행하는데 평소보다 많은 시간이 걸렸다.  
:exclamation: Connection, Statement, ResultSet 객체를 사용한 뒤 close() 메소드를 호출해서 자원을 반납하도록 하는 리팩토링을 다루어보았다.  