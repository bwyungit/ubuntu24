#!/bin/bash

echo ' $0: '$0'  - 명령어 이름'
echo 
echo ' $1: '$1'  - 첫번째 위치 매개변수'
echo

echo ' $#: '$#'  - 모든 위치 매개 변수 개수'
echo
echo ' $*: '$*'  - 모든 위치 매개변수'
echo
echo '$(ls)로 ls를 실행합니다.'
echo
echo $(ls)
echo
echo
echo '$(ls -al)로 ls -al 을 실행합니다.'
echo
echo $(ls -al)
echo 

