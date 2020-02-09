$(document).ready(function () {
    $('.stepper').mdbStepper();
    $('.mdb-select').materialSelect();

    $("#type_table, #equipement_div, #modele_div, #ps_div, #cell_div").hide();
});
function someFunction21() {
    setTimeout(function () {
        $('#horizontal-stepper-fix').nextStep();
    }, 2000);
}

$('#type_table_select').change(function () {
    $(this).val()>=0?$("#equipement_div, #modele_div").show(100):null;
    if($(this).val()==="1") {
        $("#ps_div").show(100);
        $("#cell_div").hide(100);
    }else{
        $("#ps_div").hide(100);
        $("#cell_div").show(100);
    }
});

$('#model').change(function () {
    $(this).val()==="-1"?$("#type_table").show(100):$("#type_table, #equipement_div, #modele_div, #ps_div, #cell_div").hide();
});
$('#number-horizontal').change(function () {
   let $div = $("#installation-form");
   let $thead = $('table thead');
   let $tbody = $('table tbody');

    if ($div.children().length > $(this).val()){
        while ($div.children().length > $(this).val()){
            $div.children(':last-child').remove();
            $thead.children('tr').children(':last-child').remove();
            $tbody.children().each(function () {
                $(this).children(':last-child').remove();
            })
        }
    }else{
        if ($div.children().length < $(this).val()) {

            let $td = '<td><div class="md-form">'+
                '<input type="number" class="form-control" value="0">'+
                '</div></td>';
            let $i = $div.children().length+1;
            while ($div.children().length < $(this).val()) {
                var $htmlForm =
                    '<div class="col-4">'+
                    '<form class="form-data instal" id="instal_'+$i+'" method="POST" action="/batiments/installations">'+
                    '<h6>Installation '+$i+'</h6>'+
                    '<div class="md-form">'+
                    '<input type="text" id="nom_'+$i+'" class="validate form-control install_name" name="nom" >'+
                    '<label for="nom_'+$i+'">Nom</label>'+
                    '</div>'+
                    '<div class="md-form mt-0">'+
                    '<textarea id="description_'+$i+'" class="validate md-textarea form-control" rows="3" name="description"></textarea>'+
                    '<label for="description_'+$i+'">Description <span class="text-muted">(facultatif)</span></label>'+
                    '</div>'+
                    '</form>'+
                    '</div>';
                $i+=1;
                let $th = "<th class='th-sm'>Installation "+($div.children().length+1)+"</th>";
                $div.append($htmlForm);
                $thead.children('tr').append($th);
                $tbody.children().each(function () {
                    $(this).append($td);
                })

            }
        }
    }
});

$('#addModele').click(function () {

    let $type = $('#type_table_select');
    let $model = $('#model');
    let $td = '<td class="md-form "><input type="number" class="form-control" value="" placeholder="Quantité" required></td>';
    let $row = '<tr><td><i class="fas fa-trash-alt"></i></td><td>'+$model.find('option:selected').text().split(" - ")[0]+'</td><td>'+$model.find('option:selected').text().split(" - ")[1]+'</td></tr>';
    let $tbody = $('table tbody');

    $tbody.append($row);
    for ($i=0; $i< $("#installation-form").children().length; $i++){
        $tbody.children(':last-child').append($td);
    }

    let $hiddenForm =
        '<form class="form-data" method="POST" action="/equipements">'+
        // '{{--Equipement--}}'
        '<input type="hidden" name="produit_id" value="'+($model.val()>0?$model.val()+'">':+'">'+
        '<input type="hidden" name="installation_id" value="">'+
        '<input type="hidden" name="date_installation" value="'+$("#date_installation").val()+'">'+
        '<input type="hidden" name="orientation" value="'+$("#orientation").val()+'">'+
        '<input type="hidden" name="geolocalisation" value="'+$("#geolocalisation").val()+'">'+
        '<input type="hidden" name="elevation" value="'+$("#elevation").val()+'">'+
        '<input type="hidden" name="inclinaison" value="'+$("#inclinaison").val()+'">')+
        '</form>'+
        // '{{--Model--}}'
        ($model.val()<=0?'<form class="form-data form-produit" method="POST" action="/produits">'+
        '<input type="hidden" name="marque" value="'+$("#marque").val()+'">'+
        '<input type="hidden" name="reference" value="'+$("#reference").val()+'">'+
        '<input type="hidden" name="largeur" value="'+$("#largeur").val()+'">'+
        '<input type="hidden" name="longueur" value="'+$("#longueur").val()+'">'+
        '<input type="hidden" name="hauteur" value="'+$("#hauteur").val()+'">'+
        '<input type="hidden" name="poids" value="'+$("#poids").val()+'">'+
        '<input type="hidden" name="rendement" value="'+$("#rendement").val()+'">'+
        '<input type="hidden" name="equipement" value="'+ ($type.val()==="1"?"panneauxs":$type.val()==="2"?"batteries":"")+'">'+
        '</form>'+
        // '{{--Panneaux--}}'
        ($type.val()==="1"?'<form class="form-data" method="POST" action="/panneaux">'+
        '<input type="hidden" name="produit_id" value="">'+
        '<input type="hidden" name="puissance_nominal" value="'+$("#puissance_nominal").val()+'">'+
        '<input type="hidden" name="tension_nominal" value="'+$("#tension_nominal").val()+'">'+
        '<input type="hidden" name="tension_max" value="'+$("#tension_max").val()+'">'+
        '<input type="hidden" name="courant_max" value="'+$("#courant_max").val()+'">'+
        '<input type="hidden" name="tension_co" value="'+$("#tension_co").val()+'">'+
        '<input type="hidden" name="courant_cc" value="'+$("#courant_cc").val()+'">'+
        '</form>':
        // '{{--Batteries--}}'
        ($type.val()==="2"?'<form class="form-data" method="POST" action="/batteries">'+
        '<input type="hidden" name="produit_id" value="">'+
        '<input type="hidden" name="tension_stockage" value="'+$("#tension_stockage").val()+'">'+
        '<input type="hidden" name="capacite_stockage" value="'+$("#capacite_stockage").val()+'">'+
        '<input type="hidden" name="type" value="'+$("#type").val()+'">'+
        '</form>':"")):"");
    // console.log($hiddenForm);
    $tbody.children(':last-child').children(':first-child').append($hiddenForm);
});

$('#submit-data').click(function () {
    $forms = $('.instal, #batiment, .form-produit');
    console.log($forms);
    let $i = 0;
    $forms.each(function () {
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'post',
            url: $(this)[0].action,
            data: $(this).serialize(),
            success: function ($response) {
                // $data = JSON.parse($response);
                console.log($response);
                var $tbody = $('table tbody');
                switch ($response.table) {
                    case "installations":
                        $tbody.children().each(function () {
                            $id = $response.data.id;
                            var $num=3;
                            $('.install_name').each(function () {
                                $(this).val() === $response.data.nom?$num += parseInt($(this).parent().prev().text().split(" ")[1]):0;
                            });
                            $produits = $(this).children(':first-child').children('form[action="/produits"]');
                            $produits.find('input[name=produit_id]');
                            console.log($produits)
                        });
                        break;
                    case "batiments":
                        break;
                    case "equipements":
                        break;
                    case "panneaux":
                        break;
                    case "batteries":
                        break;
                    case "produits":
                        $tbody.children().each(function () {
                            $id = $response.data.id;
                            var $num=3;
                            $('.install_name').each(function () {
                                $(this).val() === $response.data.nom?$num += parseInt($(this).parent().prev().text().split(" ")[1]):0;
                            });
                            console.log($num);
                            $equipements = $(this).children(':first-child').children('form[action="/equipements"]');
                            $panneaux = $(this).children(':first-child').children('form[action="/panneaux"]');
                            $quantity = $(this).children(':nth-child('+$num+')').children('input').val();
                            console.log($equipements, $panneaux, $quantity)

                        });
                        break;
                }
            },
            error: function (response) {
                console.log(response);
                console.log($(this).serialize());
            }
        });
    });
});

