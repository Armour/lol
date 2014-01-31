			<div id="voice-frame">
				{voice}
				<div class="voice-box">
					<img class="voice-cover" src="<?php echo site_url("{voice_file_location}") ?>" alt="{voice_name}/{voice_designer}/{voice_vote_number}">
					<div class="voice-border"></div>
					<p class="voice-name">{voice_name}</p>
					<p class="voice-author">作者：{voice_designer}</p>
					<p class="voice-votes">当前得票：<span class="votes">{voice_vote_number}</span></p>
					<p class="voice-rank">{voice_rank}</p>
					<form method="post" accept-charset="utf-8" action="<?php echo site_url("index/vote_voice/{voice_id}") ?>">
						<button name="vote" class="btn-voice"></button>
					</form>
				</div>
				{/voice}
			</div>
