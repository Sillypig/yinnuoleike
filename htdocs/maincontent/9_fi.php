<form id="form" action="./" method="post">
	<div id="boxes">
		<div id="dialog" class="window">
			<table style="margin: 30px;">
                <th colspan="2" class="title">
				<h1 class="center" style="text-align: center;">Ota yhteyttä</h1>
				</th>
				<tr>
					<td colspan="2" class="required product">
						<select name="field[tuotteet]" id="product_select">
							<option value="">Olen kiinnostunut tuotteesta&#8230;</option>
							<option value="Jippostore f-Commerce">Jippostore f-Commerce</option>
							<option value="Jippostore f-Commerce Branded">Jippostore f-Commerce Branded</option>
							<option value="Jippostore f-Commerce Custom">Jippostore f-Commerce Custom</option>
							<option value="Jippostore f-Commerce DM">Jippostore f-Commerce DM</option>
						</select>
						<p class="iferror">Olen kiinnostunut tuotteesta</p>
					</td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[etunimi]" class="text verifyText" title="*Etunimi" />
						<p class="iferror">Tämä tieto tarvitaan</p>
                    </td>
                    <td class="required">
						<input type="text" name="field[sukunimi]" class="text verifyText" title="*Sukunimi" />
						<p class="iferror">Tämä tieto tarvitaan</p>
                    </td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[yritys]" class="text verifyText" title="*Yritys" />
						<p class="iferror">Tämä tieto tarvitaan</p>
                    </td>
                    <td class="required">
						<input type="text" name="field[ytunnus]" class="text verifyText" title="*Y-tunnus" />
						<p class="iferror">Tämä tieto tarvitaan</p>
                    </td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[osoite]" class="text verifyText" title="*Osoite" />
						<p class="iferror">Tämä tieto tarvitaan</p>
                    </td>
					<td class="required">
						<input type="text" name="field[postinumero]" class="text verifyText" title="*Postinumero" />
						<p class="iferror">Tämä tieto tarvitaan</p>
                    </td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[kaupunki]" class="text verifyText" title="*Kaupunki" />
						<p class="iferror">Tämä tieto tarvitaan</p>
                    </td>
					<td class="required">
						<input type="text" name="field[maa]" class="text verifyText" title="*Maa" />
						<p class="iferror">Tämä tieto tarvitaan</p>
                    </td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[puhelin]" class="text verifyText" title="*Puhelin" />
						<p class="iferror">Tämä tieto tarvitaan</p>
                    </td>
                    <td class="required">
						<input type="text" name="field[sähköposti]" class="text verifyMail" title="*Sähköposti" />
						<p class="iferror">Tämä tieto tarvitaan</p>
                    </td>
				</tr>
				<tr>
					<td colspan="2">
						<textarea name="field[lisätietoja]" title="*Lisätietoja" style="resize:none;width:683px;height:100px" rows="" cols=""></textarea>
					</td>
				</tr>
				<tr>
					<td>
						<input class="order_btn btn btn-large btn-success" type="submit" value="Lähetä"/>
					</td>
				</tr>
			</table>				
		</div>
	</div>
</form>