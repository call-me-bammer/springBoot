## Project :: Front-end 'Login Form' For SpringBoot

### Log

12.31 - 페이지 구조 및 요구사항 받음

1.5 - 회원가입 페이지 sample_register.html 받음

1.7 - 로그인 페이지 관련 추가 구현 스택 및 로그인 페이지 sample_index.html 받음



### Tree

~~~
├── README.md
├── index.html
├── sample_index.html
├── sample_register.html
├── lib
│   └── jQuery
│       ├── jquery-3.4.1.js
│       └── jquery-3.4.1.min.js
├── login.php
├── register.php
├── scripts
│   └── script.js
├── statics
│   └── images
│       └── ttagji.jpg
├── styles
│   └── style.css
└── templates
    ├── forget_password.html
    ├── main.html
    └── register.html
~~~



#### Table of Contents

1. [Login](#index)

2. [Register](#register)

3. [Forget Password](#forget_password)

4. [Main](#main)



## index

param1. username

param2. password

* If clicks **LOGIN** `h1` element, submit to @{/login}.

  ~~~javascript
  // ~/index.html's line 21.
  $("h1").click(function() {
  	$("form").submit();
  });
  ~~~

link1. @{/forgotPassword}

link2. @{/signup}



## register

1. 아이디

2. 비번

3. 비번확인

4. 성별 (남, 여) 버튼으로 만들수 있으면 버튼으로 만들자 개꿀

5. 생년월일 8글자

6. 전화번호

7. 이메일 (인증번호 발송 버튼)

8. 인증번호 ***(인증번호 확인 버튼 얘 누르면 완료버튼 활성화!)***

9. 맨밑에 완료버튼

ㅇㅋ?

    9. !(반드시 필요한 정보 && 인증번호) 일 때는 submit 거부 + 팝업 or slide 효과
    
    ps. 활성화가 '없던 것이 나타나는 효과'를 포함한다면 디자인적으로 멋있을 듯,
    하지만 인증 이후 단순 '제출 가능'을 허가한다면 상단의 정보를 바꾸어서 제출할
    수 있기에 위험. (결론은, 아무튼 submit 조건을 잘 검사하도록 구현하겠음. ㅋ)
    
    ps. 생각나는대로 써보면... 반드시 필요한 정보의 누락 여부, 아이디 중복 여부,
        확인 비밀번호 일치 여부 등 검사하도록.



## forget_password

1. 아이디
2. 이메일 (인증번호 발송)
3. 인증번호 (인증번호 확인 버튼. 이 버튼을 누르면 밑에 애들이 활성화!)
4. 새로운 비번
5. 비번확인
6. 맨밑에 완료버튼

ㅇㅋ?

    ~/templates/forget_password.html



## main

1. 사진 (고양이로 넣자)
2. 바로밑에 hi, <username>

로그아웃 / 회원정보수정