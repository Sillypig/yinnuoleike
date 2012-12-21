<form id="form" action="./" method="post">
	<div id="boxes">
		<div id="dialog" class="window">
			<table style="margin: 30px;">
                <th colspan="2" class="title">
				<h1 class="center" style="text-align: center;">訂購服務</h1>
				</th>
				<tr>
					<td colspan="2" class="required product">
						<select name="field[tuotteet]" id="product_select">
							<option value="">我對以下服務感興趣&#8230;</option>
							<option value="Web Maintenance">網頁維護</option>
							<option value="Web Design and Development">網頁設計和開發</option>
							<option value="Facebook Direct Marketing Apps">Facebook直銷應用</option>
							<option value="Advertising">Advertising</option>
						</select>
						<p class="iferror">我對以下服務感興趣</p>
					</td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[etunimi]" class="text verifyText" title="*名" />
						<p class="iferror">此內容為必填</p>
                    </td>
                    <td class="required">
						<input type="text" name="field[sukunimi]" class="text verifyText" title="*姓" />
						<p class="iferror">此內容為必填</p>
                    </td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[yritys]" class="text verifyText" title="*公司名稱" />
						<p class="iferror">此內容為必填</p>
                    </td>
                    <td class="required">
						<input type="text" name="field[ytunnus]" class="text verifyText" title="*公司ID" />
						<p class="iferror">此內容為必填</p>
                    </td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[osoite]" class="text verifyText" title="*地址" />
						<p class="iferror">此內容為必填</p>
                    </td>
					<td class="required">
						<input type="text" name="field[postinumero]" class="text verifyText" title="*郵政編碼" />
						<p class="iferror">此內容為必填</p>
                    </td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[kaupunki]" class="text verifyText" title="*城市" />
						<p class="iferror">此內容為必填</p>
                    </td>
					<td class="required">
						<input type="text" name="field[maa]" class="text verifyText" title="*國家" />
						<p class="iferror">此內容為必填</p>
                    </td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[puhelin]" class="text verifyText" title="*電話" />
						<p class="iferror">此內容為必填</p>
                    </td>
                    <td class="required">
						<input type="text" name="field[sähköposti]" class="text verifyMail" title="*電子郵件" />
						<p class="iferror">此內容為必填</p>
                    </td>
				</tr>
				<tr>
					<td colspan="2">
						<textarea name="field[lisätietoja]" title="*附加信息" style="resize:none;width:683px;height:100px" rows="" cols=""></textarea>
					</td>
				</tr>
				<tr>
					<td>
						<input class="send_button" type="submit" value=""/>
					</td>
				</tr>
			</table>				
		</div>
	</div>
</form>