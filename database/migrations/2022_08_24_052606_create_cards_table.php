<?php

use  Illuminate \ Database \ Migrations \ Migration ;
use  Illuminate \ Database \ Schema \ Blueprint ;
use  Illuminate \ Support \ Facades \ Schema ;

return  nova  classe () estende  Migração {
    /**
     * Execute as migrações.
     *
     * @return nulo
     */
     função  pública para cima ()
    {
        /*
        criar ponto de tabela
        (
            id int chave primária auto_increment não assinada,
            card_id int não assinado não nulo,
            points int default 0 null,
            gasto decimal(10, 2) padrão 0,00 nulo,
            created_at timestamp não nulo,
            updated_at timestamp não nulo,
            delete_at timestamp nulo,
            restrição points_card_id_fk
                chave estrangeira (card_id) referencia o cartão (id)
        );
        */

        Schema :: create ( 'point' , function ( Blueprint  $ table ) {
            $ tabela -> incrementos ( 'id' );
            $ table -> unsignedInteger ( 'card_id' );
            $ table -> integer ( 'points' )-> default ( 0 )-> nullable ();
            $ table -> decimal ( 'gasto' , 10 , 2 )-> default ( 0.00 )-> nullable ();
            $ table -> timestamp ( 'updated_at' )-> anulável ();
            $ table -> timestamp ( 'created_at' ) -> anulável ();
            $ tabela -> softDeletes ();

            $ table -> estrangeiros ( 'card_id' )-> referências ( 'id' )-> on ( 'card' );
        });
    }

    /**
     * Reverta as migrações.
     *
     * @return nulo
     */
     função  pública para baixo ()
    {
        Schema :: dropIfExists ( 'ponto' );
    }
};