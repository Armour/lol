<div class="main" id="main-index">
	<div id="frame-skin">
		{skin_first}	
		<div class="skin-box" id="boxl">
			<div class="box-border"></div>
			<img class="skin-cover" src="{skin_cover}" alt="{skin_name}/{skin_designer}/{skin_vote}">
			<p class="skin-name">{skin_name}</p>
			<p class="skin-author">作者：{skin_designer}</p>
			<p class="skin-rank">（{skin_rank}）</p>
			<!-- 这里的rank是指“是第一名呢”之类 -->
			<form method="post" accept-charset="utf-8" action="vote/index/vote_skin/{skin_id}">
				<button name="vote" class="btn-vote">支持一下</button>
			</form>
		</div>
		{/skin_first}
		{skin_second}	
		<div class="skin-box" id="boxl">
			<div class="box-border"></div>
			<img class="skin-cover" src="{skin_cover}" alt="{skin_name}/{skin_designer}/{skin_vote}">
			<p class="skin-name">{skin_name}</p>
			<p class="skin-author">作者：{skin_designer}</p>
			<p class="skin-rank">（{skin_rank}）</p>
			<!-- 这里的rank是指“是第一名呢”之类 -->
			<form method="post" accept-charset="utf-8" action="vote/index/vote_skin/{skin_id}">
				<button name="vote" class="btn-vote">支持一下</button>
			</form>
		</div>
		{/skin_second}
		{skin_third}	
		<div class="skin-box" id="boxl">
			<div class="box-border"></div>
			<img class="skin-cover" src="{skin_cover}" alt="{skin_name}/{skin_designer}/{skin_vote}">
			<p class="skin-name">{skin_name}</p>
			<p class="skin-author">作者：{skin_designer}</p>
			<p class="skin-rank">（{skin_rank}）</p>
			<!-- 这里的rank是指“是第一名呢”之类 -->
			<form method="post" accept-charset="utf-8" action="vote/index/vote_skin/{skin_id}">
				<button name="vote" class="btn-vote">支持一下</button>
			</form>
		</div>
		{/skin_third}
	</div>
	<div id="frame-voice">
		
	</div>
</div>