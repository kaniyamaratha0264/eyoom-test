<?php
/**
 * theme file : /theme/THEME_NAME/tail.html.php
 */
if (!defined('_EYOOM_')) exit;
?>

<?php if (!$wmode) { ?>
			<?php if ($side_layout['use'] == 'yes') { ?>
					</main>
				<?php
				if ($side_layout['pos'] == 'right') {
					/* 사이드영역 시작 */
					include_once(EYOOM_THEME_PATH . '/side.html.php');
					/* 사이드영역 끝 */
				}
				?>
				</div><?php /* End .main-wrap */ ?>
			<?php } else { ?>
					</main>
				</div><?php /* End .main-wrap */ ?>
			<?php } ?>

		</div><?php /* End .container */ ?>
	</div><?php /* End .basic-body */ ?>

	<?php /*----- footer 시작 -----*/ ?>
	<footer class="footer footer-main">
		<div class="container">
			<div class="footer-top">
				<div class="footer-logo">
				<img src="<?php echo EYOOM_THEME_URL; ?>/image/fp-logo.svg" class="footer-logo" alt="<?php echo $config['cf_title']; ?>">
                                       
				</div>
				<div class="footer-right-nav">
				    <a href="<?php echo get_eyoom_pretty_url('page','provision'); ?>">카카오톡 채널추가</a>
					<a href="<?php echo get_eyoom_pretty_url('page','privacy'); ?>">상품후기</a>
					<a href="<?php echo G5_BBS_URL; ?>/qalist.php">1:1문의</a>
					<a href="<?php echo G5_BBS_URL; ?>/faq.php">FAQ</a>
					<a href="<?php echo get_eyoom_pretty_url('page','noemail'); ?>">공지사항</a>
				</div>
			</div>

			<div class="footer-cont-info">
				<?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
				<div class="adm-edit-btn btn-edit-mode hidden-xs hidden-sm" style="top:-31px">
					<div class="btn-group">
						<a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=biz_info&amp;amode=biz&amp;thema=<?php echo $theme; ?>&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="ae-btn-l"><i class="far fa-edit"></i> 기업정보 설정</a>
						<a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=biz_info&amp;amode=biz&amp;thema=<?php echo $theme; ?>" target="_blank" class="ae-btn-r" title="새창 열기">
							<i class="fas fa-external-link-alt"></i>
						</a>
						<button type="button" class="ae-btn-info" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true" data-bs-content="
							<span class='f-s-13r'>
							<strong class='text-indigo'>기업정보 사용가능한 변수</strong><br>
							<div class='margin-hr-10'></div>
							<strong class='text-indigo'>[설정정보]</strong><br>
							회사명 : $bizinfo['bi_company_name']<br>
							사업자등록번호 : $bizinfo['bi_company_bizno']<br>
							대표자명 : $bizinfo['bi_company_ceo']<br>
							대표전화 : $bizinfo['bi_company_tel']<br>
							팩스번호 : $bizinfo['bi_company_fax']<br>
							통신판매업 : $bizinfo['bi_company_sellno']<br>
							부가통신사업자 : $bizinfo['bi_company_bugano']<br>
							정보관리책임자 : $bizinfo['bi_company_infoman']<br>
							정보책임자메일 : $bizinfo['bi_company_infomail']<br>
							우편번호 : $bizinfo['bi_company_zip']<br>
							주소1 : $bizinfo['bi_company_addr1']<br>
							주소2 : $bizinfo['bi_company_addr2']<br>
							주소3 : $bizinfo['bi_company_addr3']<br>
							고객센터1 : $bizinfo['bi_cs_tel1']<br>
							고객센터2 : $bizinfo['bi_cs_tel2']<br>
							고객센터팩스 : $bizinfo['bi_cs_fax']<br>
							고객센터메일 : $bizinfo['bi_cs_email']<br>
							상담시간 : $bizinfo['bi_cs_time']<br>
							휴무안내 : $bizinfo['bi_cs_closed']
							</span>
						"><i class="fas fa-question-circle"></i></button>
					</div>
				</div>
				<?php } ?>
				<div class="footer-sf footer-add">
					<div class="footer-sft">
						<strong class="text-white f-w-600">CS CENTER 1522-2041</strong><span class="text-gd">|</span>
						<strong class="text-white f-w-600">평일 10:00 ~ 17:00 (점심 12:00 ~ 13:00)</strong>
					</div>
					<div class="footer-sfb">
						<a class="color-grey" href="mailto:<?php echo $bizinfo['bi_cs_email']; ?>"><?php echo $bizinfo['bi_cs_email']; ?></a><span class="text-gd">|</span>
						<span class="color-grey">토요일, 일요일, 공휴일은 휴무입니다. 근무시간 이후 문의는 1:1 문의를 이용해주세요.</span>
				    </div>
				</div>
				<div class="footer-sb footer-add">
					<div class="footer-ssp">
					<strong class="text-white f-w-600"><?php echo $bizinfo['bi_company_name']; ?></strong><span class="text-gd">|</span>
					<strong class="text-white f-w-600">대표 : <?php echo $bizinfo['bi_company_ceo']; ?></strong>
					</div>
					<div class="footer-ssb">
					<span class="color-grey">사업자등록번호 : <?php echo $bizinfo['bi_company_bizno']; ?></span>
					<span class="text-gd">|</span>
					<?php if($bizinfo['bi_company_sellno']) { ?>
					<span class="color-grey">통신판매업번호 : <?php echo $bizinfo['bi_company_sellno']; ?></span>
					<span class="text-gd">|</span>
					<?php } ?>
					<span class="color-grey">주소 : <?php echo $bizinfo['bi_company_zip']; ?> <?php echo $bizinfo['bi_company_addr1']; ?> <?php echo $bizinfo['bi_company_addr2']; ?> <?php echo $bizinfo['bi_company_addr3']; ?></span>
				
				    </div>
				</div>
				
			</div>

			<div class="footer-copyright f-w-400">
				<span>Copyright </span>&copy; <strong class="f-w-400"><?php echo $config['cf_title']; ?></strong>. All Rights Reserved.
			</div>
			<div class="footer-link-info">
			        <a href="<?php echo get_eyoom_pretty_url('page','provision'); ?>">서비스이용약관</a>
					<a href="<?php echo get_eyoom_pretty_url('page','privacy'); ?>">개인정보처리방침</a>
					<a href="<?php echo get_eyoom_pretty_url('page','noemail'); ?>">이메일무단수집거부</a>
			</div>
		</div>
	</footer>
	<?php /*----- footer 끝 -----*/ ?>
</div>
<?php /*----- wrapper 끝 -----*/ ?>

<?php /*----- 전체 검색 입력창 시작 -----*/ ?>
<div class="search-full">
	<div class="search-close-btn"></div>
	<fieldset class="search-field">
		<legend>게시판 전체검색</legend>
		<form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
		<input type="hidden" name="sfl" value="wr_subject||wr_content">
		<input type="hidden" name="sop" value="and">
		<label for="search_input" class="sound_only">검색어 입력 필수</label>
		<input type="text" name="stx" id="search_input" maxlength="20" placeholder="검색어 입력 [ 전체 게시판 검색 ]">
		<button type="submit" class="search-btn" value="검색"><i class="fas fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
		</form>
		<script>
		function fsearchbox_submit(f)
		{
			var stx = f.stx.value.trim();
			if (stx.length < 2) {
				alert("검색어는 두글자 이상 입력하십시오.");
				f.stx.select();
				f.stx.focus();
				return false;
			}

			// 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
			var cnt = 0;
			for (var i = 0; i < stx.length; i++) {
				if (stx.charAt(i) == ' ')
					cnt++;
			}

			if (cnt > 1) {
				alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
				f.stx.select();
				f.stx.focus();
				return false;
			}
			f.stx.value = stx;

			return true;
		}
		</script>
	</fieldset>
</div>
<?php /*----- 전체 검색 입력창 끝 -----*/ ?>

<?php /* 상담 신청 버튼 */ ?>
<?php if ($config['cf_use_counsel'] == '1') { ?>
<a <?php if ( !G5_IS_MOBILE ) { ?>href="javascript:void(0);" onclick="counsel_modal();"<?php } else { ?>href="<?php echo G5_URL; ?>/page/?pid=counsel"<?php } ?> class="counsel-btn"><i class="fas fa-headset"></i><span class="sound-only">상담신청</span></a>
<?php } ?>

<?php /* 사이드바 회원 버튼 */ ?>
<button type="button" class="sidebar-user-trigger sidebar-user-btn mo-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasUserRight" aria-controls="offcanvasUserRight"><i class="fas fa-user-alt"></i><span class="sound-only">회원 사이드바</span></button>

<?php /* Side Nav Mobile Toggler */ ?>
<button type="button" class="navbar-mobile-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft"><i class="fas fa-bars"></i><span class="sound-only">메뉴 사이드바</span></button>

<?php /* Back To Top */ ?>
<div class="eb-backtotop">
	<svg class="backtotop-progress" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		<span class="progress-count"></span>
	</svg>
</div>
<?php } // !$wmode ?>

<?php
include_once(EYOOM_THEME_PATH . '/misc.html.php');
?>

<?php
if ($is_member && $eyoomer['onoff_push'] == 'on') {
    include_once(EYOOM_THEME_PATH . '/skin/push/basic/push.skin.html.php');
}
?>

<script src="<?php echo EYOOM_THEME_URL; ?>/js/app.js?ver=<?php echo G5_JS_VER; ?>"></script>
<?php if ($is_admin == 'super') { ?>
<script>
$(document).ready(function() {
    var edit_mode = "<?php echo $eyoom_default['edit_mode']; ?>";
    if (edit_mode == 'on') {
        $(".btn-edit-mode").show();
    } else {
        $(".btn-edit-mode").hide();
    }

    $("#btn_edit_mode").click(function() {
        var edit_mode = $("#edit_mode").val();
        if (edit_mode == 'on') {
            $(".btn-edit-mode").hide();
            $("#edit_mode").val('');
        } else {
            $(".btn-edit-mode").show();
            $("#edit_mode").val('on');
        }

        $.post("<?php echo G5_ADMIN_URL; ?>/?dir=theme&pid=theme_editmode&smode=1", { edit_mode: edit_mode });
    });
});
</script>
<?php } ?>

<?php
if ( $config['cf_analytics'] ) echo $config['cf_analytics'];
?>