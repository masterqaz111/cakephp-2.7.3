<h1>About</h1>

<p>Mathieu Dubreuil</p><br>

<p>420-267 MO Développer un site Web et une application pour Internet.<br>
    Automne 2015, Collège Montmorency.<br>

<tr>
    <td><strong><?php echo __('Logo de la compagnie'); ?></strong></td><br>
   <td><strong><?php echo $this->Html->image('logo.svg',array('alt' => 'Logo de la compagnie','border' => '0')); ?></strong></td>
</tr>
<ul>
    <li>On doit tous dabord se connecter avec le user: admin et le password: admin</li>
    <li>Téléversement d'image à trouver dans prisonier dans les vue add, edit et view</li>
    <li>Liste liée à trouver dans prisonier dans les vue add et edit
        <ul>
            <li>
                Si on choisit homme dans le champ sex, les objects du champ ethny vont être au masculin.
            </li>
            <li>
                Si on choisit femme dans le champ sex, les objects du champ ethny vont être au feminin.
            </li>
        </ul>
    </li>

    <li>L'autocomplete se situ dans prisonier dans le add et le edit
        <ul>
            <li>
                Dans le champ nom si on écrit la letre a il va faire un autocomplete avec different nom.
            </li>
        </ul>
    </li>
    <li>
        Une confirmation de email s'envoit lors du register et lors d'un ajout d'un User avec la vue add de User. 
    </li>
    <li><a href="https://github.com/masterqaz11/cakephp-2.7.3">Voici le lien vers mon GitHub</a></li>
    <li><a href="http://www.databaseanswers.org/data_models/prisons_and_prisoners/index.htm">Voici le lien vers le model de la DB</a></li>  
    <img src='http://www.databaseanswers.org/data_models/prisons_and_prisoners/images/prisons_and_prisoners_model.gif'>
</ul>
</p>

