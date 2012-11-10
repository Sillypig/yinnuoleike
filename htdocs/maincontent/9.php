<form id="form" action="./" method="post">
	<div id="boxes">
		<div id="dialog" class="window">
			<table style="margin: 30px;">
                <th colspan="2" class="title">
				<h1 class="center" style="text-align: center;">Order Services</h1>
				</th>
				<tr>
					<td colspan="2" class="required product">
						<select name="field[tuotteet]" id="product_select">
							<option value="">I'm interested in&#8230;</option>
							<option value="Web Maintenance">Web Maintenance</option>
							<option value="Web Design and Development">Web Design and Development</option>
							<option value="Facebook Direct Marketing Apps">Facebook Direct Marketing Apps</option>
							<option value="Advertising">Advertising</option>
						</select>
						<p class="iferror">I'm interested in</p>
					</td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[etunimi]" class="text verifyText" title="*First name" />
						<p class="iferror">This is a required field</p>
                    </td>
                    <td class="required">
						<input type="text" name="field[sukunimi]" class="text verifyText" title="*Last name" />
						<p class="iferror">This is a required field</p>
                    </td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[yritys]" class="text verifyText" title="*Company" />
						<p class="iferror">This is a required field</p>
                    </td>
                    <td class="required">
						<input type="text" name="field[ytunnus]" class="text verifyText" title="*Business ID" />
						<p class="iferror">This is a required field</p>
                    </td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[osoite]" class="text verifyText" title="*Address" />
						<p class="iferror">This is a required field</p>
                    </td>
					<td class="required">
						<input type="text" name="field[postinumero]" class="text verifyText" title="*ZIP" />
						<p class="iferror">This is a required field</p>
                    </td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[kaupunki]" class="text verifyText" title="*City" />
						<p class="iferror">This is a required field</p>
                    </td>
					<td class="required">
						<input type="text" name="field[maa]" class="text verifyText" title="*Country" />
						<p class="iferror">This is a required field</p>
                    </td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[puhelin]" class="text verifyText" title="*Phone" />
						<p class="iferror">This is a required field</p>
                    </td>
                    <td class="required">
						<input type="text" name="field[sähköposti]" class="text verifyMail" title="*Email" />
						<p class="iferror">This is a required field</p>
                    </td>
				</tr>
				<tr>
					<td colspan="2">
						<textarea name="field[lisätietoja]" title="*Additional information" style="resize:none;width:683px;height:100px" rows="" cols=""></textarea>
					</td>
				</tr>
				<tr>
					<td>
						<input class="order_btn btn btn-large btn-success" type="submit" value="Send"/>
					</td>
				</tr>
			</table>				
		</div>
	</div>
</form>