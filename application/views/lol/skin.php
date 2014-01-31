
			<div id="skin-frame">
				{skin}
				<div class="skin-box">
					<img class="skin-cover" src="<?php echo site_url("{skin_file_location}") ?>" alt="{skin_name}/{skin_designer}/{skin_vote_number}">
					<div class="skin-border"></div>
					<p class="skin-name">{skin_name}</p>
					<p class="skin-author">作者：{skin_designer}</p>
					<p class="skin-votes">当前得票：<span class="votes">{skin_vote_number}</span></p>
					<p class="skin-rank">{skin_rank}</p>
					<form method="post" accept-charset="utf-8" action="<?php echo site_url("index/vote_skin/{skin_id}") ?>">
						<button name="vote" class="btn-skin"></button>
					</form>
				</div>
				{/skin}
			</div>