# 사용방법
php check.php 주소 출력할 내용
  
# 예제
추출할 데이터가 있는 웹사이트의 주소 : https://onoffmix.com/event/108060
제목이 담겨 있는 태그의 선택자 : 'title'
남은 자리가 담겨 있는 태그의 선택자 : '.attend .free .number'
전체 자리가 담겨 있는 태그의 선택자 : '.attend .total .number'
원하는 형식 : 제목 : 참가가능/정원
php check.php https://onoffmix.com/event/108060 'title' -t' : ' '.attend .free .number' -t'/' '.attend .total .number'