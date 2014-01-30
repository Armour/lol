
			<div id="skin-frame">
				{skin1}
				<div class="skin-box" id="boxl">
					<img class="skin-cover" src="{skin_file_location}" alt="{skin_name}/{skin_designer}/{skin_vote_number}">
					<div class="skin-border"></div>
					<p class="skin-name">{skin_name}</p>
					<p class="skin-author">作者：{skin_designer}</p>
					<p class="skin-votes">当前得票：{skin_vote_number}</p>
					<p class="skin-rank">（第一名）</p>
					<form method="post" accept-charset="utf-8" action="index/vote_skin/{skin_id}">
						<button name="vote" class="btn-skin"></button>
					</form>
				</div>
				{/skin1}
				{skin2}
				<div class="skin-box" id="boxm">
					<img class="skin-cover" src="{skin_file_location}" alt="{skin_name}/{skin_designer}/{skin_vote_number}">
					<div class="skin-border"></div>
					<p class="skin-name">{skin_name}</p>
					<p class="skin-author">作者：{skin_designer}</p>
					<p class="skin-votes">当前得票：{skin_vote_number}</p>
					<p class="skin-rank">（第二名）</p>
					<form method="post" accept-charset="utf-8" action="index/vote_skin/{skin_id}">
						<button name="vote" class="btn-skin"></button>
					</form>
				</div>
				{/skin2}
				{skin3}
				<div class="skin-box" id="boxr">
					<img class="skin-cover" src="{skin_file_location}" alt="{skin_name}/{skin_designer}/{skin_vote_number}">
					<div class="skin-border"></div>
					<p class="skin-name">{skin_name}</p>
					<p class="skin-author">作者：{skin_designer}</p>
					<p class="skin-votes">当前得票：{skin_vote_number}</p>
					<p class="skin-rank">（第三名）</p>
					<form method="post" accept-charset="utf-8" action="index/vote_skin/{skin_id}">
						<button name="vote" class="btn-skin"></button>
					</form>
				</div>
				{/skin3}
			</div>
			<div id="voice-frame">
				{voice1}
				<div class="voice-box" id="box1">
					<img class="voice-cover" src="{voice_file_location}" alt="{voice_name}/{voice_designer}/{voice_vote_number}"> <div class="voice-border"></div>
					<p class="voice-name">{voice_name}</p>
					<p class="voice-author">作者：{voice_designer}</p>
					<p class="voice-votes">当前得票：{voice_vote_number}</p>
					<p class="voice-rank">（第一名）</p>
					<form method="post" accept-charset="utf-8" action="index/vote_voice/{voice_id}">
						<button name="vote" class="btn-voice"></button>
					</form>
				</div>
				{/voice1}
				{voice2}
				<div class="voice-box" id="box2">
					<img class="voice-cover" src="{voice_file_location}" alt="{voice_name}/{voice_designer}/{voice_vote_number}">
					<div class="voice-border"></div>
					<p class="voice-name">{voice_name}</p>
					<p class="voice-author">作者：{voice_designer}</p>
					<p class="voice-votes">当前得票：{voice_vote_number}</p>
					<p class="voice-rank">（第二名）</p>
					<form method="post" accept-charset="utf-8" action="index/vote_voice/{voice_id}">
						<button name="vote" class="btn-voice"></button>
					</form>
				</div>
				{/voice2}
				{voice3}
				<div class="voice-box" id="box3">
					<img class="voice-cover" src="{voice_file_location}" alt="{voice_name}/{voice_designer}/{voice_vote_number}">
					<div class="voice-border"></div>
					<p class="voice-name">{voice_name}</p>
					<p class="voice-author">作者：{voice_designer}</p>
					<p class="voice-votes">当前得票：{voice_vote_number}</p>
					<p class="voice-rank">（第三名）</p>
					<form method="post" accept-charset="utf-8" action="index/vote_voice/{voice_id}">
						<button name="vote" class="btn-voice"></button>
					</form>
				</div>
				{/voice3}
			</div>
