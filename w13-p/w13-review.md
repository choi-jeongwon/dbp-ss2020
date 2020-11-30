##### :star: 컴퓨터공학과 20176189 최정원


# :white_check_mark: 실습 동작 화면
*  https://youtu.be/QVpr7vJ74_s 고화질로 선택하여 시청해주시면 감사하겠습니다.

# :white_check_mark: 새로 배운 내용
* Tomcat 설치 및 설정 - 8080포트로 웹페이지가 열리지 않는다면, 톰캣의 포트번호를 변경해보기
* Eclipse 삭제하기
```
C:/user/사용자이름경로 에서  
.eclopse  
.p2  
eclipse  
eclipse-workspace  
해당되는 폴더 삭제하면 됨(.폴더가 안 보인다면, 파일탐색기>보기>숨긴항목 체크 후 확인)
```
* 이클립스에서 톰캣 서버 설정 & 실행
* 이클립스에 오라클 db 연동
* JSP(Java Server Page): HTML 내부에 java 코드를 입력하여, 웹 서버에서 동적으로 웹브라우저를 관리하는 언어
* DBConnection.java (db 연결 정보를 하나의 파일로 변환하여 중복 제거)
```
package kr.ac.sungshin.w13;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DBConnection {
	private static String className = "oracle.jdbc.driver.OracleDriver";
	private static String url = "jdbc:oracle:thin:@localhost:1521:xe";
	private static String user = "hr";
	private static String password = "1234";	
	public static Connection getConnection() {
		Connection conn = null;		
		try {
			Class.forName(className);
			conn = DriverManager.getConnection(url, user, password);			
			System.out.println("connection success");
			return conn;
		} catch (ClassNotFoundException e){
			System.out.println("연결 드라이버 없음");
			return null;
		} catch (SQLException e){
			System.out.print("연결 실패 : ");
			if(e.getMessage().indexOf("ORA-28009") > -1)
				System.out.println("허용되지 않는 접속 권한 없음");
			else if(e.getMessage().indexOf("ORA-01017") > -1)
				System.out.println("유저/패스워드 확인");
			else if(e.getMessage().indexOf("IO") > -1)
				System.out.println("IO - 연결확인!");
			else 
				System.out.println("기본 연결확인!");
			return null;
		}
	}
}
```

# :white_check_mark: 문제가 발생하거나 고민한 내용 + 해결 과정
* 이클립스에 오라클 db를 연동하며 연결을 테스트 할 때 Ping이 계속 안 되었다. 문제점은 강의영상과 같이 Host를 server로 지정했기 때문이었다. Host를 localhost를 바꿈으로써 'Ping succeeded!' 메시지를 받을 수 있었다.
* jdk 버전이 여러 개 있는 상태로 Eclipse Enterprise를 설치하려고 하니 버전이 맞지 않는 오류가 발생하였다. 따라서 환경변수 설정을 통해 Eclipse Enterprise 설치시에는 jdk 14.0.2 버전으로 진행하였고, ojdbc를 복사할 때는 jdk 1.8.0_271 버전을 통해 진행하여 오류를 해결할 수 있었다.

# :white_check_mark: 참고할 만한 내용
* https://dzzienki.tistory.com/4 이클립스 개발환경 세팅



# :white_check_mark: 회고(+,-,!)
:heavy_plus_sign: 자바를 사용하면서 처음으로 이클립스 환경을 사용하게 되어 좋았다.  
:heavy_minus_sign: 그동안의 과제를 모두 포함하여 이번 주차가 오류가 가장 많아서 과제 수행시간이 그만큼 오래걸렸다.   
:exclamation: JSP를 새롭게 다루어보면서 구글링을 많이 하게 되었는데, JSP에 대한 좋은 자료들이 많다는 사실을 알게되었다.   