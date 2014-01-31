
			<div id="skin-frame">
				{skin}
				<div class="skin-box">
					<img class="skin-cover" src="<?php echo base_url("static/skin_cover") ?>/{skin_file_location}" alt="{skin_name}/{skin_designer}/{skin_vote_number}">
					<div class="skin-border"></div>
					<p class="skin-name">{skin_name}</p>
					<p class="skin-author">作者：{skin_designer}</p>
					<p class="skin-votes">当前得票�span class="votes">{skin_vote_number}</span></p>
					<p class="skin-rank">{skin_rank}</p>
					<form method="post" accept-charset="utf-8" action="<?php echo site_url("index/vote_skin/{skin_id}") ?>">
						<button name="vote" class="btn-skin"></button>
					</form>
				</div>
				{/skin}
			</div>
			<div id="voice-frame">
				{voice}
				<div class="voice-box">
					<img class="voice-cover" src="<?php echo base_url("static/voice_cover") ?>/{voice_file_location}" alt="{voice_name}/{voice_designer}/{voice_vote_number}">
					<div class="voice-border"></div>
					<p class="voice-name">{voice_name}</p>
					<p class="voice-author">作者：{voice_designer}</p>
					<p class="voice-votes">当前得票�span class="votes">{voice_vote_number}</span></p>
					<p class="voice-rank">{voice_rank}</p>
					<form method="post" accept-charset="utf-8" action="<?php echo site_url("index/vote_voice/{voice_id}") ?>">
						<button name="vote" class="btn-voice"></button>
					</form>
				</div>
				{/voice}
			</div>
