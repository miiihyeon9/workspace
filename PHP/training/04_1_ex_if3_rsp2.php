

<?php
    // rand(0,10);
    // rand (0,10) 숫자 0~10 까지 랜덤으로 숫자를 나타내줌

// 이기는 경우 지는경우 비기는 경우

$rock = "바위";
$scissors = "가위";
$paper = "보";
$rsp_com = rand(0,2);
$rsp_count = rand(0,2);
$win = "  이겼습니다";
$compare = "  비겼습니다";
$lose ="  졌습니다";
$vs = " vs ";
$computer ="COMPUTER : " ;
$counter  ="COUNTER : ";



//컴퓨터가 바위를 냈을 때
    if($rsp_com == 0)
    {
        if($rsp_count == 0)
        {
            $you = $rock.$compare;
        } else if ($rsp_count == 1)
        {
            $you = $scissors.$lose;
        } else 
        {
            $you = $paper.$win;
        }
        $result= $computer.$rock.$vs.$counter.$you;
    } 
    
    //컴퓨터가 가위를 냈을 때
    
    else if ($rsp_com == 1)
    {
        if($rsp_count == 0)
        {
            $you = $rock.$win;
        } else if ($rsp_count == 1)
        {
            $you = $scissors.$compare;
        } else 
        {
            $you = $paper.$lose;
        }
        $result= $computer.$scissors.$vs.$counter.$you;
    }
    //컴퓨터가 보를 냈을 때
    else
    {
        if ($rsp_com == 0){
            $you = $rock.$lose;
        } else if ($rsp_com == 1)
        {
            $you = $scissors.$win;
        } else 
        {
            $you = $paper.$compare;
        }
        $result =$computer.$paper.$vs.$counter.$you;
    }
    
    echo $result;
    



?>