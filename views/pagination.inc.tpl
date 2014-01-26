<!-- Vue de la paginnation -->

<div class="pagination">
	<ul>
		{if $nep!=$nb}
			{$j=1}
			{$i=0}
			{if $p>0}
				{$pr=$p-$nep}
				<li><a href='index.php?p={$pr}'>«</a></li>
			{/if}
			{while $i<$nb}
				{if $p==$i}
					<li class='disabled'> <a href='#'>{$j}</a></li>
				{else}
					<li> <a  href='index.php?p={$i}'>{$j}</a></li>
				{/if}
				{$i=$i+$nep}
				{$j=$j+1}
			{/while}
			{if ($p+$nep)< $nb}
				{$s=$p+$nep}
				<li><a href='index.php?p={$s}'>»</a></li>
			{/if}
		{/if}
	</ul>
</div>