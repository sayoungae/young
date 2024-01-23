
<!-- 20231229 -->
<!DOCTYPE html>
<html lang="ko">
    <?include"../incoud/head.html";?>
<script>
    $(document).ready(function(){
        AOS.init({
            duration: 1500,
            once: true,
            offset : 50,
        });
    })
</script>
<body>
    <?include"../incoud/skipNav.html";?>
    <div id="wrap" class="">
        <!-- HEADER -->
        <?include"../incoud/header.html";?>
        <?include"../incoud/allMenu.html";?>
        <!-- // HEADER -->
        <!-- container -->
        <div id="container">
            <section class="m_cont1">
                <div class="bg_img"></div>
                <div class="inner">
                    <div class="t_cont">
                        <div class="cont_inner">
                            <h2>충남<span>청</span>년플랫폼</h2>
                            <p data-aos="fade-up">
                                충남 청년들의 다양한 삶을 지원합니다.<br/>
                                충남청년플래폼은 청년에게 필요한 정책을 제공합니다.
                            </p>
                            <div class="main_search">
                                <form action="#" method="post">
                                    <div class="serch_in">
                                        <input type="text" id="sKeyword" placeholder="검색어를 입력하세요" title="검색어 입력">
                                        <button type="submit" class="searchOk" title="검색버튼" >
                                            <img src="./images/search_icon02.png" alt="">
                                        </button>
                                    </div>
                                    <div class="suggest_box">
                                        <p>실시간 정책 순위:</p>
                                        <div class="suggest">
                                            <a href="#none" title="">
                                                <p>01</p>
                                                <span class="icon up"></span>
                                                <span>청년도약계좌</span>
                                            </a>
                                            <a href="#none" title="">
                                                <p>02</p>
                                                <span class="icon dw"></span>
                                                <span>청년도약계좌</span>
                                            </a>
                                            <a href="#none" title="">
                                                <p>03</p>
                                                <span class="icon up"></span>
                                                <span>청년도약계좌</span>
                                            </a>
                                            <a href="#none" title="">
                                                <p>04</p>
                                                <span class="icon up"></span>
                                                <span>청년도약계좌</span>
                                            </a>
                                            <a href="#none" title="">
                                                <p>05</p>
                                                <span class="icon dw"></span>
                                                <span>청년도약계좌</span>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="b_cont">
                        <div class="srh_menu">
                            <h3>충남청년정책 찾기</h3>
                            <div class="menu_box">
                                <form action="#" method="post">
                                    <div>
                                        <select class="menu1" title="분야별">
                                            <option value="" selected disabled hidden >분야별</option>
                                            <option>일자리</option>
                                            <option>주거·복지·문화</option>
                                            <option>영농·정착</option>
                                            <option>교육활동</option>
                                        </select>
                                        <select class="menu2" title="세부분야별">
                                            <option value="" selected disabled hidden >세부분야별</option>
                                            <option></option>
                                        </select>
                                        <input type="text" id="mKeyword" placeholder="궁금한 청년정책을 검색하세요" title="검색어 입력">
                                    </div>
                                    <div class="btn_box">
                                        <button type="button" class="sm_btn" title="정책찾기"><span>정책찾기</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="noti_box"  data-aos="fade-up">
                            <div class="noti_inner">
                                <h3>공지사항</h3>
                                <ul>
                                    <li>
                                        <a href="#none" title="">
                                            <span class="isu_data">23.07.20</span>
                                            <div class="tit">청년의 고립 은둔 실태 설문 조사 실시</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#none" title="">
                                            <span class="isu_data">23.07.20</span>
                                            <div class="tit">청년의 고립 은둔 실태 설문 조사 실시</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#none" title="">
                                            <span class="isu_data">23.07.20</span>
                                            <div class="tit">청년의 고립 은둔 실태 설문 조사 실시</div>
                                        </a>
                                    </li>
                                </ul>
                                <a href="#none" class="m_more" title="공지사항 더보기"><img src="./images/add_icon01.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="m_cont2">
                <div class="slide_box">
                    <h3 data-aos="fade-up">지원 가능한 사업</h3>
                    <p data-aos="fade-up"
                    data-aos-duration="2500">신청 가능한 정책에 신청해 보세요!</p>
                    <div class="swiper-container">
                        <div class="swiper-wrapper m_slide1">
                            <div class="swiper-slide">
                                <a href="" class="item">
                                    <div class="item_inner">
                                        <div class="img_box">
                                            <img src="./images/mslide2_01.png" alt=""/>
                                        </div>
                                        <div class="txt_box">
                                            <h4>청년도전지원사업</h4>
                                            <ul>
                                                <li>
                                                    <span>대상</span>
                                                    <span>19세 이상 청년</span>
                                                </li>
                                                <li>
                                                    <span>모집기간</span>
                                                    <span>2023-07-01~2023-12-31</span>
                                                </li>
                                                <li>
                                                    <span>신청방법</span>
                                                    <span>온라인 연계신청</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" class="item">
                                    <div class="item_inner">
                                        <div class="img_box">
                                            <img src="./images/mslide2_02.png" alt=""/>
                                        </div>
                                        <div class="txt_box">
                                            <h4>청년도전지원사업</h4>
                                            <ul>
                                                <li>
                                                    <span>대상</span>
                                                    <span>19세 이상 청년</span>
                                                </li>
                                                <li>
                                                    <span>모집기간</span>
                                                    <span>2023-07-01~2023-12-31</span>
                                                </li>
                                                <li>
                                                    <span>신청방법</span>
                                                    <span>온라인 연계신청</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" class="item">
                                    <div class="item_inner">
                                        <div class="img_box">
                                            <img src="./images/mslide2_03.png" alt=""/>
                                        </div>
                                        <div class="txt_box">
                                            <h4>청년도전지원사업</h4>
                                            <ul>
                                                <li>
                                                    <span>대상</span>
                                                    <span>19세 이상 청년</span>
                                                </li>
                                                <li>
                                                    <span>모집기간</span>
                                                    <span>2023-07-01~2023-12-31</span>
                                                </li>
                                                <li>
                                                    <span>신청방법</span>
                                                    <span>온라인 연계신청</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" class="item">
                                    <div class="item_inner">
                                        <div class="img_box">
                                            <img src="./images/mslide2_04.png" alt=""/>
                                        </div>
                                        <div class="txt_box">
                                            <h4>청년도전지원사업</h4>
                                            <ul>
                                                <li>
                                                    <span>대상</span>
                                                    <span>19세 이상 청년</span>
                                                </li>
                                                <li>
                                                    <span>모집기간</span>
                                                    <span>2023-07-01~2023-12-31</span>
                                                </li>
                                                <li>
                                                    <span>신청방법</span>
                                                    <span>온라인 연계신청</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="swiper-slide">
                                <a href="" class="item">
                                    <div class="item_inner">
                                        <div class="img_box">
                                            <img src="./images/mslide2_05.png" alt=""/>
                                        </div>
                                        <div class="txt_box">
                                            <h4>청년도전지원사업</h4>
                                            <ul>
                                                <li>
                                                    <span>대상</span>
                                                    <span>19세 이상 청년</span>
                                                </li>
                                                <li>
                                                    <span>모집기간</span>
                                                    <span>2023-07-01~2023-12-31</span>
                                                </li>
                                                <li>
                                                    <span>신청방법</span>
                                                    <span>온라인 연계신청</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" class="item">
                                    <div class="item_inner">
                                        <div class="img_box">
                                            <img src="./images/mslide2_06.png" alt=""/>
                                        </div>
                                        <div class="txt_box">
                                            <h4>청년도전지원사업</h4>
                                            <ul>
                                                <li>
                                                    <span>대상</span>
                                                    <span>19세 이상 청년</span>
                                                </li>
                                                <li>
                                                    <span>모집기간</span>
                                                    <span>2023-07-01~2023-12-31</span>
                                                </li>
                                                <li>
                                                    <span>신청방법</span>
                                                    <span>온라인 연계신청</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" class="item">
                                    <div class="item_inner">
                                        <div class="img_box">
                                            <img src="./images/mslide2_01.png" alt=""/>
                                        </div>
                                        <div class="txt_box">
                                            <h4>청년도전지원사업</h4>
                                            <ul>
                                                <li>
                                                    <span>대상</span>
                                                    <span>19세 이상 청년</span>
                                                </li>
                                                <li>
                                                    <span>모집기간</span>
                                                    <span>2023-07-01~2023-12-31</span>
                                                </li>
                                                <li>
                                                    <span>신청방법</span>
                                                    <span>온라인 연계신청</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" class="item">
                                    <div class="item_inner">
                                        <div class="img_box">
                                            <img src="./images/mslide2_02.png" alt=""/>
                                        </div>
                                        <div class="txt_box">
                                            <h4>청년도전지원사업</h4>
                                            <ul>
                                                <li>
                                                    <span>대상</span>
                                                    <span>19세 이상 청년</span>
                                                </li>
                                                <li>
                                                    <span>모집기간</span>
                                                    <span>2023-07-01~2023-12-31</span>
                                                </li>
                                                <li>
                                                    <span>신청방법</span>
                                                    <span>온라인 연계신청</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="control">
                        <div class="swiper_arrow">
                            <button class="swiper-button-prev">
                                <img src="./images/arrow_prev.png" alt=""/>
                            </button>
                            <button class="swiper-button-next">
                                <img src="./images/arrow_next.png" alt=""/>
                            </button>
                        </div>
                        <div class="scrollbar_box">
                            <!-- 네비게이션 버튼 -->
                            <div class="swiper-scrollbar"></div>
                            <!-- 스크롤바 -->
                        </div>
                    </div>
                </div>
            </section>
            <section class="m_cont3">
                <div class="top_cont">
                    <div class="inner2">
                        <h3 data-aos="fade-up">
                            생애주기별<span>정책</span>
                        </h3>
                        <ul>
                            <li class="on">
                                <a href="#none" title="탐색기">
                                    <div class="tit_box"><span>탐색기</span></div>
                                    <div class="desc_box">
                                        <span>사회에 진입하지 않은 학생 및<br/>취업준비생 대상</span>
                                        <p data-aos="fade-up"><img src="./images/lcp_img01.png" alt=""></p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#none" title="사회진입기">
                                    <div class="tit_box"><span>사회진입기</span></div>
                                    <div class="desc_box">
                                        <span>사회에 진입한<br/>사회초년생 대상</span>
                                        <p data-aos="fade-up"><img src="./images/lcp_img02.png" alt=""></p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#none" title="안정기">
                                    <div class="tit_box"><span>안정기</span></div>
                                    <div class="desc_box">
                                        <span>사회초년생에서 벗어나 안정된<br/>사회생활을 하고 있는 청년 대상</span>
                                        <p data-aos="fade-up"><img src="./images/lcp_img03.png" alt=""></p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#none" title="전주기">
                                    <p class="chk_cir"></p>
                                    <div class="tit_box"><span>전주기</span></div>
                                    <div class="desc_box">
                                        <span>청년의 창업 준비단계부터<br/>성장단계까지 청년 전체 대상</span>
                                        <p data-aos="fade-up"><img src="./images/lcp_img04.png" alt=""></p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bott_cont">
                    <h3>청년공간</h3>
                    <div class="slide_box">
                        <div class="m_slide2">
                            <a href="#none" title="" class="itme">
                                <div class="img_box">
                                    <img src="./images/mslide2_1.png" alt="">
                                </div>
                                <div class="txt_box">
                                    <div class="box_inner">
                                        <h4>청년 공간</h4>
                                        <div class="desc">
                                            <div class="txt">
                                                <p>[청년 일로와유]</p>
                                                <p>충청남도 아산시 번영로 86번길 27-4 아산시 어울림경제센터 1층 / Tel:041-530-6275</p>
                                            </div>
                                            <div class="link">
                                                <p>자세히보기</p>
                                                <p><img src="./images/arrow_next2.png" alt=""></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#none" title="" class="itme">
                                <div class="img_box">
                                    <img src="./images/mslide2_1.png" alt="">
                                </div>
                                <div class="txt_box">
                                    <div class="box_inner">
                                        <h4>청년 공간</h4>
                                        <div class="desc">
                                            <div class="txt">
                                                <p>[청년 일로와유]</p>
                                                <p>충청남도 아산시 번영로 86번길 27-4 아산시 어울림경제센터 1층 / Tel:041-530-6275</p>
                                            </div>
                                            <div class="link">
                                                <p>자세히보기</p>
                                                <p><img src="./images/arrow_next2.png" alt=""></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#none" title="" class="itme">
                                <div class="img_box">
                                    <img src="./images/mslide2_1.png" alt="">
                                </div>
                                <div class="txt_box">
                                    <div class="box_inner">
                                        <h4>청년 공간</h4>
                                        <div class="desc">
                                            <div class="txt">
                                                <p>[청년 일로와유]</p>
                                                <p>충청남도 아산시 번영로 86번길 27-4 아산시 어울림경제센터 1층 / Tel:041-530-6275</p>
                                            </div>
                                            <div class="link">
                                                <p>자세히보기</p>
                                                <p><img src="./images/arrow_next2.png" alt=""></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="auto_control">
                            <div class="inner_box"><button type="button" class="btn stop" title="정지"></button></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="m_cont4">
                <div class="inner2">
                    <div class="cont1" data-aos="fade-up" data-aos-duration="2000">
                        <h3>청년 생활 고민소</h3>
                        <div class="tab_box">
                            <ul class="tap_tit">
                                <li class="on"><a href="#none" rel="stab1" title="취업/교육">취업/교육</a></li>
                                <li><a href="#none" rel="stab2" title="금융정보">금융정보</a></li>
                                <li><a href="#none" rel="stab3" title="마음/건강">마음/건강</a></li>
                                <li><a href="#none" rel="stab4" title="영농/자립">영농/자립</a></li>
                            </ul>
                            <div class="cont_box">
                                <div id="stab1" class="conBox">
                                    <ul class="tab_inner">
                                        <li>
                                            <p class="img_box"><img src="./images/temImg04.png" alt=""/></p>
                                            <a href="#none" title="" class="txt_box">
                                                <p>재테크 관련 다들 어떻게 관리하고 계신가요?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <p class="img_box"><img src="./images/temImg04.png" alt=""/></p>
                                            <a href="#none" title="" class="txt_box">
                                                <p>취업 관해서 조언 듣고 싶습니다.</p>
                                            </a>
                                        </li>
                                        <li>
                                            <p class="img_box"><img src="./images/temImg04.png" alt=""/></p>
                                            <a href="#none" title="" class="txt_box">
                                                <p>직장에서 따돌림을 당하는데 고민 들어주세요</p>
                                            </a>
                                        </li>
                                        <li>
                                            <p class="img_box"><img src="./images/temImg04.png" alt=""/></p>
                                            <a href="#none" title="" class="txt_box">
                                                <p>21살에 이길이 맞는걸까요?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="stab2" class="conBox">
                                    <ul class="tab_inner">
                                        <li>
                                            <p class="img_box"><img src="./images/temImg04.png" alt=""/></p>
                                            <a href="#none" title="" class="txt_box">
                                                <p>재테크 관련 다들 어떻게 관리하고 계신가요?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <p class="img_box"><img src="./images/temImg04.png" alt=""/></p>
                                            <a href="#none" title="" class="txt_box">
                                                <p>취업 관해서 조언 듣고 싶습니다.</p>
                                            </a>
                                        </li>
                                        <li>
                                            <p class="img_box"><img src="./images/temImg04.png" alt=""/></p>
                                            <a href="#none" title="" class="txt_box">
                                                <p>직장에서 따돌림을 당하는데 고민 들어주세요</p>
                                            </a>
                                        </li>
                                        <li>
                                            <p class="img_box"><img src="./images/temImg04.png" alt=""/></p>
                                            <a href="#none" title="" class="txt_box">
                                                <p>21살에 이길이 맞는걸까요?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="stab3" class="conBox">
                                    <ul class="tab_inner">
                                        <li>
                                            <p class="img_box"><img src="./images/temImg04.png" alt=""/></p>
                                            <a href="#none" title="" class="txt_box">
                                                <p>재테크 관련 다들 어떻게 관리하고 계신가요?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <p class="img_box"><img src="./images/temImg04.png" alt=""/></p>
                                            <a href="#none" title="" class="txt_box">
                                                <p>취업 관해서 조언 듣고 싶습니다.</p>
                                            </a>
                                        </li>
                                        <li>
                                            <p class="img_box"><img src="./images/temImg04.png" alt=""/></p>
                                            <a href="#none" title="" class="txt_box">
                                                <p>직장에서 따돌림을 당하는데 고민 들어주세요</p>
                                            </a>
                                        </li>
                                        <li>
                                            <p class="img_box"><img src="./images/temImg04.png" alt=""/></p>
                                            <a href="#none" title="" class="txt_box">
                                                <p>21살에 이길이 맞는걸까요?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="stab4" class="conBox">
                                    <ul class="tab_inner">
                                        <li>
                                            <p class="img_box"><img src="./images/temImg04.png" alt=""/></p>
                                            <a href="#none" title="" class="txt_box">
                                                <p>재테크 관련 다들 어떻게 관리하고 계신가요?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <p class="img_box"><img src="./images/temImg04.png" alt=""/></p>
                                            <a href="#none" title="" class="txt_box">
                                                <p>취업 관해서 조언 듣고 싶습니다.</p>
                                            </a>
                                        </li>
                                        <li>
                                            <p class="img_box"><img src="./images/temImg04.png" alt=""/></p>
                                            <a href="#none" title="" class="txt_box">
                                                <p>직장에서 따돌림을 당하는데 고민 들어주세요</p>
                                            </a>
                                        </li>
                                        <li>
                                            <p class="img_box"><img src="./images/temImg04.png" alt=""/></p>
                                            <a href="#none" title="" class="txt_box">
                                                <p>21살에 이길이 맞는걸까요?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="cont2" data-aos="fade-up"
                    data-aos-delay="300" data-aos-duration="2000">
                        <h3>알림존</h3>
                        <div class="slide_box">
                            <div class="alrArrows">
                                <div class="slides-numbers" style="display: block;">
                                    <span class="active">01</span> / <span class="total"></span>
                                </div>
                                <button type="button" class="arrow alrPrev" title="이전"><img src="./images/arrow_prev.png" alt=""/></button>
                                <button  type="button" class="alrcontrol stop" title="정지"></button>
                                <button class="arrow alrNext" title="다음"><img src="./images/arrow_next.png" alt=""/></button>

                            </div>
                            <div class="m_slide3">
                                <a href="#none" title="" class="itme">
                                    <div class="img_box">
                                        <img src="./images/alrslide01.png" alt="">
                                    </div>
                                </a>
                                <a href="#none" title="" class="itme">
                                    <div class="img_box">
                                        <img src="./images/alrslide01.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
    
                    </div>
                    <div class="cont3" data-aos="fade-up"
                    data-aos-delay="600" data-aos-duration="2000">
                        <h3>충남정책제안</h3>
                        <div class="prop_box">
                            <div class="img_tit">
                                <p><img src="./images/mbg_06_1.png" alt="청년에게 필요한 정책을 제안해봐!"/></p>
                            </div>
                            <div class="txt_img">
                                <p><img src="./images/mbg_06_3.png" alt="청년에게 필요한 정책을 제안해봐!"/></p>
                            </div>
                            <a href="#none" title="제안하기" class="prop_btn">
                                <span>제안하기</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- footer -->
        <?include"../incoud/footer.html";?>
        <!-- //footer -->
    </div>
</body>
</html>
