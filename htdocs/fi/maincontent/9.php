<form id="form" action="./" method="post">
	<div id="boxes">
		<div id="dialog" class="window">
			<table style="margin: 30px;">
                <th colspan="2" class="title">
				<h1 class="center" style="text-align: center;">Tilaa palveluita</h1>
				</th>
				<tr>
					<td colspan="2" class="required product">
						<select name="field[tuotteet]" id="product_select">
							<option value="">Minua kiinnostaa&#8230;</option>
							<option value="Web Maintenance">Sivuston ylläpito</option>
							<option value="Web Design and Development">Sivustojen suunnittelu ja kehitys</option>
							<option value="Facebook Direct Marketing Apps">Facebook suoramarkkinointi sovellukset</option>
							<option value="Advertising">Mainonta</option>
						</select>
						<p class="iferror">Minua kiinnostaa&#8230;</p>
					</td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[etunimi]" class="text verifyText" title="*Etunimi" />
						<p class="iferror">Tämä on pakollinen kenttä</p>
                    </td>
                    <td class="required">
						<input type="text" name="field[sukunimi]" class="text verifyText" title="*Sukunimi" />
						<p class="iferror">Tämä on pakollinen kenttä</p>
                    </td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[yritys]" class="text verifyText" title="*Yritys" />
						<p class="iferror">Tämä on pakollinen kenttä</p>
                    </td>
                    <td class="required">
						<input type="text" name="field[ytunnus]" class="text verifyText" title="*Y-tunnus" />
						<p class="iferror">Tämä on pakollinen kenttä</p>
                    </td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[osoite]" class="text verifyText" title="*Katuosoite" />
						<p class="iferror">Tämä on pakollinen kenttä</p>
                    </td>
					<td class="required">
						<input type="text" name="field[postinumero]" class="text verifyText" title="*Postinumero" />
						<p class="iferror">Tämä on pakollinen kenttä</p>
                    </td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[kaupunki]" class="text verifyText" title="*Postitoimipaikka" />
						<p class="iferror">Tämä on pakollinen kenttä</p>
                    </td>
					<td class="required">
						<input type="text" name="field[maa]" class="text verifyText" title="*Maa" />
						<p class="iferror">Tämä on pakollinen kenttä</p>
                    </td>
				</tr>
				<tr>
					<td class="required">
						<input type="text" name="field[puhelin]" class="text verifyText" title="*Puhelin" />
						<p class="iferror">Tämä on pakollinen kenttä</p>
                    </td>
                    <td class="required">
						<input type="text" name="field[sähköposti]" class="text verifyMail" title="*Sähköpostiosoite" />
						<p class="iferror">Tämä on pakollinen kenttä</p>
                    </td>
				</tr>
				<tr>
					<td colspan="2">
						<textarea name="field[lisätietoja]" title="Lisätietoja" style="resize:none;width:683px;height:100px" rows="" cols=""></textarea>
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