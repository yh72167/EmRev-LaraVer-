
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>タイトル</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="./js/app.js"></script>
</head>

<body>

    <section class="mypeUserProfile">
      <div class="mypeUserProfile__img-wrap">
        <img class="mypeUserProfile__img">
      </div>
      <div class="mypeUserProfile__detail">
        <div class="mypeUserProfile__name">
          <h1 class="mypeUserProfile__name-element">name</h1>
          <div class="mypeUserProfile__name-output">山田太郎</div>
        </div>
        <div class="mypeUserProfile__ageTel-Wrap">
          <div class="mypeUserProfile__age">
            <div class="mypeUserProfile__age-element">age</div>
            <div class="mypeUserProfile__age-output">00</div>
          </div>
          <div class="mypeUserProfile__tel">
            <div class="mypeUserProfile__tel-element">tel</div>
            <div class="mypeUserProfile__tel-output">000-0000-0000</div>
          </div>
        </div>
        <div class="mypeUserProfile__address">
          <div class="mypeUserProfile__address-element">adless</div>
          <div class="mypeUserProfile__address-output">東京都板橋区〇〇-0000-0</div>
        </div>
        <div class="mypeUserProfile__state">
          <div class="mypeUserProfile__state-element">state</div>
          <div class="mypeUserProfile__state-output">一般会員</div>
        </div>
      </div>
    </section>


    <!-- =================================== -->


    <section class="mypeMyReviewList">
      <h1 class="mypeMyReviewList__title">Latest Post Review List</h1>
      <div class="mypeMyReviewList__wrap">
        <div class="mypeMyReviewList__listWrap">
          <span class="mypeMyReviewList__scrollLeft">◁</span>
          <!-- =================================== -->

          <div class="mypeMyReviewList__detailElement">
            <div class="mypeMyReviewList__img-wrap">
              <img class="mypeMyReviewList__img">
            </div>
            <div class="mypeMyReviewList__detail">
              <div class="mypeMyReviewList__nameGood-Wrap">
                <div class="mypeMyReviewList__name">
                  <div class="mypeMyReviewList__name-element">投稿者名</div>
                  <div class="mypeMyReviewList__name-output">山田太郎</div>
                </div>
                <div class="mypeMyReviewList__good">
                  <div class="mypeMyReviewList__good-element">♡</div>
                  <div class="mypeMyReviewList__good-output">00</div>
                </div>
              </div>
              <div class="mypeMyReviewList__occupation">
                <div class="mypeMyReviewList__occupation-element">在籍時の職種</div>
                <div class="mypeMyReviewList__occupation-output">サンプルサンプル</div>
              </div>
              <div class="mypeMyReviewList__PostingTime">
                <div class="mypeMyReviewList__PostingTime-element">投稿日時・時刻</div>
                <div class="mypeMyReviewList__PostingTime-Output">00 月</div>
              </div>
              <div class="mypeMyReviewList__ReviewDetail">
                <span class="mypeMyReviewList__ReviewDetail-link">このレビューを詳しく見る</span>
              </div>
            </div>
          </div>

          <!-- =================================== -->
          <div class="mypeMyReviewList__detailElement">
            <div class="mypeMyReviewList__img-wrap">
              <img class="mypeMyReviewList__img">
            </div>
            <div class="mypeMyReviewList__detail">
              <div class="mypeMyReviewList__nameGood-Wrap">
                <div class="mypeMyReviewList__name">
                  <div class="mypeMyReviewList__name-element">投稿者名</div>
                  <div class="mypeMyReviewList__name-output">山田太郎</div>
                </div>
                <div class="mypeMyReviewList__good">
                  <div class="mypeMyReviewList__good-element">♡</div>
                  <div class="mypeMyReviewList__good-output">00</div>
                </div>
              </div>
              <div class="mypeMyReviewList__occupation">
                <div class="mypeMyReviewList__occupation-element">在籍時の職種</div>
                <div class="mypeMyReviewList__occupation-output">サンプルサンプル</div>
              </div>
              <div class="mypeMyReviewList__PostingTime">
                <div class="mypeMyReviewList__PostingTime-element">投稿日時・時刻</div>
                <div class="mypeMyReviewList__PostingTime-Output">00 月00日</div>
              </div>
              <div class="mypeMyReviewList__ReviewDetail">
                <span class="mypeMyReviewList__ReviewDetail-link">このレビューを詳しく見る</span>
              </div>
            </div>
          </div>

          <!-- =================================== -->
          <div class="mypeMyReviewList__detailElement">
            <div class="mypeMyReviewList__img-wrap">
              <img class="mypeMyReviewList__img">
            </div>
            <div class="mypeMyReviewList__detail">
              <div class="mypeMyReviewList__nameGood-Wrap">
                <div class="mypeMyReviewList__name">
                  <div class="mypeMyReviewList__name-element">投稿者名</div>
                  <div class="mypeMyReviewList__name-output">山田太郎</div>
                </div>
                <div class="mypeMyReviewList__good">
                  <div class="mypeMyReviewList__good-element">♡</div>
                  <div class="mypeMyReviewList__good-output">00</div>
                </div>
              </div>
              <div class="mypeMyReviewList__occupation">
                <div class="mypeMyReviewList__occupation-element">在籍時の職種</div>
                <div class="mypeMyReviewList__occupation-output">サンプルサンプル</div>
              </div>
              <div class="mypeMyReviewList__PostingTime">
                <div class="mypeMyReviewList__PostingTime-element">投稿日時・時刻</div>
                <div class="mypeMyReviewList__PostingTime-Output">00 月00日 00:00</div>
              </div>
              <div class="mypeMyReviewList__ReviewDetail">
                このレビューを詳しく見る
              </div>
            </div>
          </div>

          <!-- =================================== -->
          <div class="mypeMyReviewList__detailElement">
            <div class="mypeMyReviewList__img-wrap">
              <img class="mypeMyReviewList__img">
            </div>
            <div class="mypeMyReviewList__detail">
              <div class="mypeMyReviewList__nameGood-Wrap">
                <div class="mypeMyReviewList__name">
                  <div class="mypeMyReviewList__name-element">投稿者名</div>
                  <div class="mypeMyReviewList__name-output">山田太郎</div>
                </div>
                <div class="mypeMyReviewList__good">
                  <div class="mypeMyReviewList__good-element">♡</div>
                  <div class="mypeMyReviewList__good-output">00</div>
                </div>
              </div>
              <div class="mypeMyReviewList__occupation">
                <div class="mypeMyReviewList__occupation-element">在籍時の職種</div>
                <div class="mypeMyReviewList__occupation-output">サンプルサンプル</div>
              </div>
              <div class="mypeMyReviewList__PostingTime">
                <div class="mypeMyReviewList__PostingTime-element">投稿日時・時刻</div>
                <div class="mypeMyReviewList__PostingTime-Output">00 月00日 00:00</div>
              </div>
              <div class="mypeMyReviewList__ReviewDetail">
                <span class="mypeMyReviewList__ReviewDetail-link">このレビューを詳しく見る</span>
              </div>
            </div>
          </div>

          <!-- =================================== -->

          <span class="mypeMyReviewList__scrollRight">▷</span>
        </div>
      <div class="mypeMyReviewList__ReviewListLink">投稿レビューをもっと見る</div>
    </section>





    <div class="mypeDmList">
      <div class="mypeDmList__title">DmNotificationList</div>
        <div class="mypeDmList__list">

        <!-- ======================================================= -->
          <div class="mypeDmList__detail">
            <div class="mypeDmList__postingTime">
              <div class="mypeDmList__postingTime-element">投稿日時</div>
              <div class="mypeDmList__postingTime-output">2100/01/01</div>
            </div>
            <div class="mypeDmList__postingDate">
              <div class="mypeDmList__postingDate-element">投稿日時・時刻</div>
              <div class="mypeDmList__postingDate-output">00 月00日 00:00:00</div>
            </div>
            <div class="mypeDmList__postings">
              <div class="mypeDmList__postings-element">投稿内容</div>
              <div class="mypeDmList__postings-output">サンプルサンプルサンプルサンプルサンプルサンプルサンプル...</div>
            </div>
          </div>
        <!-- ======================================================= -->
        <div class="mypeDmList__detail">
            <div class="mypeDmList__postingTime">
              <div class="mypeDmList__postingTime-element">投稿日時</div>
              <div class="mypeDmList__postingTime-output">2100/01/01</div>
            </div>
            <div class="mypeDmList__postingDate">
              <div class="mypeDmList__postingDate-element">投稿日時・時刻</div>
              <div class="mypeDmList__postingDate-output">00 月00日 00:00:00</div>
            </div>
            <div class="mypeDmList__postings">
              <div class="mypeDmList__postings-element">投稿内容</div>
              <div class="mypeDmList__postings-output">サンプルサンプルサンプルサンプルサンプルサンプルサンプル...</div>
            </div>
          </div>
        <!-- ======================================================= -->
        <div class="mypeDmList__detail">
            <div class="mypeDmList__postingTime">
              <div class="mypeDmList__postingTime-element">投稿日時</div>
              <div class="mypeDmList__postingTime-output">2100/01/01</div>
            </div>
            <div class="mypeDmList__postingDate">
              <div class="mypeDmList__postingDate-element">投稿日時・時刻</div>
              <div class="mypeDmList__postingDate-output">00 月00日 00:00:00</div>
            </div>
            <div class="mypeDmList__postings">
              <div class="mypeDmList__postings-element">投稿内容</div>
              <div class="mypeDmList__postings-output">サンプルサンプルサンプルサンプルサンプルサンプルサンプル...</div>
            </div>
          </div>
        <!-- ======================================================= -->
        <div class="mypeDmList__detail">
            <div class="mypeDmList__postingTime">
              <div class="mypeDmList__postingTime-element">投稿日時</div>
              <div class="mypeDmList__postingTime-output">2100/01/01</div>
            </div>
            <div class="mypeDmList__postingDate">
              <div class="mypeDmList__postingDate-element">投稿日時・時刻</div>
              <div class="mypeDmList__postingDate-output">00 月00日 00:00:00</div>
            </div>
            <div class="mypeDmList__postings">
              <div class="mypeDmList__postings-element">投稿内容</div>
              <div class="mypeDmList__postings-output">サンプルサンプルサンプルサンプルサンプルサンプルサンプル...</div>
            </div>
          </div>
        <!-- ======================================================= -->
        <div class="mypeDmList__detail">
            <div class="mypeDmList__postingTime">
              <div class="mypeDmList__postingTime-element">投稿日時</div>
              <div class="mypeDmList__postingTime-output">2100/01/01</div>
            </div>
            <div class="mypeDmList__postingDate">
              <div class="mypeDmList__postingDate-element">投稿日時・時刻</div>
              <div class="mypeDmList__postingDate-output">00 月00日 00:00:00</div>
            </div>
            <div class="mypeDmList__postings">
              <div class="mypeDmList__postings-element">投稿内容</div>
              <div class="mypeDmList__postings-output">サンプルサンプルサンプルサンプルサンプルサンプルサンプル...</div>
            </div>
          </div>
        <!-- ======================================================= -->

        </div>
      <div class="mypeDmList__dmList-link">もっと見る</div>
    </div>


    <section class="mypeMyFavoriteList">
      <h1 class="mypeMyFavoriteList__title">Latest Post Review List</h1>
      <div class="mypeMyFavoriteList__wrap">
        <div class="mypeMyFavoriteList__listWrap">
          <span class="mypeMyFavoriteList__scrollLeft">◁</span>
          <!-- =================================== -->

          <div class="mypeMyFavoriteList__detailElement">
            <div class="mypeMyFavoriteList__img-wrap">
              <img class="mypeMyFavoriteList__img">
            </div>
            <div class="mypeMyFavoriteList__detail">
              <div class="mypeMyFavoriteList__nameGood-Wrap">
                <div class="mypeMyFavoriteList__name">
                  <div class="mypeMyFavoriteList__name-element">投稿者名</div>
                  <div class="mypeMyFavoriteList__name-output">山田太郎</div>
                </div>
                <div class="mypeMyFavoriteList__good">
                  <div class="mypeMyFavoriteList__good-element">♡</div>
                  <div class="mypeMyFavoriteList__good-output">00</div>
                </div>
              </div>
              <div class="mypeMyFavoriteList__occupation">
                <div class="mypeMyFavoriteList__occupation-element">在籍時の職種</div>
                <div class="mypeMyFavoriteList__occupation-output">サンプルサンプル</div>
              </div>
              <div class="mypeMyFavoriteList__PostingTime">
                <div class="mypeMyFavoriteList__PostingTime-element">投稿日時・時刻</div>
                <div class="mypeMyFavoriteList__PostingTime-Output">00 月</div>
              </div>
              <div class="mypeMyFavoriteList__ReviewDetail">
                <span class="mypeMyFavoriteList__ReviewDetail-link">このレビューを詳しく見る</span>
              </div>
            </div>
          </div>

          <!-- =================================== -->
          <div class="mypeMyFavoriteList__detailElement">
            <div class="mypeMyFavoriteList__img-wrap">
              <img class="mypeMyFavoriteList__img">
            </div>
            <div class="mypeMyFavoriteList__detail">
              <div class="mypeMyFavoriteList__nameGood-Wrap">
                <div class="mypeMyFavoriteList__name">
                  <div class="mypeMyFavoriteList__name-element">投稿者名</div>
                  <div class="mypeMyFavoriteList__name-output">山田太郎</div>
                </div>
                <div class="mypeMyFavoriteList__good">
                  <div class="mypeMyFavoriteList__good-element">♡</div>
                  <div class="mypeMyFavoriteList__good-output">00</div>
                </div>
              </div>
              <div class="mypeMyFavoriteList__occupation">
                <div class="mypeMyFavoriteList__occupation-element">在籍時の職種</div>
                <div class="mypeMyFavoriteList__occupation-output">サンプルサンプル</div>
              </div>
              <div class="mypeMyFavoriteList__PostingTime">
                <div class="mypeMyFavoriteList__PostingTime-element">投稿日時・時刻</div>
                <div class="mypeMyFavoriteList__PostingTime-Output">00 月00日</div>
              </div>
              <div class="mypeMyFavoriteList__ReviewDetail">
                <span class="mypeMyFavoriteList__ReviewDetail-link">このレビューを詳しく見る</span>
              </div>
            </div>
          </div>

          <!-- =================================== -->
          <div class="mypeMyFavoriteList__detailElement">
            <div class="mypeMyFavoriteList__img-wrap">
              <img class="mypeMyFavoriteList__img">
            </div>
            <div class="mypeMyFavoriteList__detail">
              <div class="mypeMyFavoriteList__nameGood-Wrap">
                <div class="mypeMyFavoriteList__name">
                  <div class="mypeMyFavoriteList__name-element">投稿者名</div>
                  <div class="mypeMyFavoriteList__name-output">山田太郎</div>
                </div>
                <div class="mypeMyFavoriteList__good">
                  <div class="mypeMyFavoriteList__good-element">♡</div>
                  <div class="mypeMyFavoriteList__good-output">00</div>
                </div>
              </div>
              <div class="mypeMyFavoriteList__occupation">
                <div class="mypeMyFavoriteList__occupation-element">在籍時の職種</div>
                <div class="mypeMyFavoriteList__occupation-output">サンプルサンプル</div>
              </div>
              <div class="mypeMyFavoriteList__PostingTime">
                <div class="mypeMyFavoriteList__PostingTime-element">投稿日時・時刻</div>
                <div class="mypeMyFavoriteList__PostingTime-Output">00 月00日 00:00</div>
              </div>
              <div class="mypeMyFavoriteList__ReviewDetail">
                このレビューを詳しく見る
              </div>
            </div>
          </div>

          <!-- =================================== -->
          <div class="mypeMyFavoriteList__detailElement">
            <div class="mypeMyFavoriteList__img-wrap">
              <img class="mypeMyFavoriteList__img">
            </div>
            <div class="mypeMyFavoriteList__detail">
              <div class="mypeMyFavoriteList__nameGood-Wrap">
                <div class="mypeMyFavoriteList__name">
                  <div class="mypeMyFavoriteList__name-element">投稿者名</div>
                  <div class="mypeMyFavoriteList__name-output">山田太郎</div>
                </div>
                <div class="mypeMyFavoriteList__good">
                  <div class="mypeMyFavoriteList__good-element">♡</div>
                  <div class="mypeMyFavoriteList__good-output">00</div>
                </div>
              </div>
              <div class="mypeMyFavoriteList__occupation">
                <div class="mypeMyFavoriteList__occupation-element">在籍時の職種</div>
                <div class="mypeMyFavoriteList__occupation-output">サンプルサンプル</div>
              </div>
              <div class="mypeMyFavoriteList__PostingTime">
                <div class="mypeMyFavoriteList__PostingTime-element">投稿日時・時刻</div>
                <div class="mypeMyFavoriteList__PostingTime-Output">00 月00日 00:00</div>
              </div>
              <div class="mypeMyFavoriteList__ReviewDetail">
                <span class="mypeMyFavoriteList__ReviewDetail-link">このレビューを詳しく見る</span>
              </div>
            </div>
          </div>

          <!-- =================================== -->

          <span class="mypeMyFavoriteList__scrollRight">▷</span>
        </div>
      <div class="mypeMyFavoriteList__ReviewListLink">投稿レビューをもっと見る</div>
    </section>

</body>
</html>
