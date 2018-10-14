<?php
use Migrations\AbstractMigration;

class InsertDataDefaultTestes extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
     public function up()
     {
         $tipos = [
             [
                 'id'    => 1,
                 'nome'  => utf8_decode('Título')
             ],
             [
                 'id'    => 2,
                 'nome'  => 'Resumo'
             ],
             [
                 'id'    => 3,
                 'nome'  => 'Palavras-chave'
             ],
             [
                 'id'    => 4,
                 'nome'  => 'Autores'
             ],
             [
                 'id'    => 5,
                 'nome'  => utf8_decode('Instituição')
             ],
             [
                 'id'    => 6,
                 'nome'  => 'Ano'
             ],
         ];

         $resultados = [
             [
                 'id'    => 1,
                 'nome'  => 'Sucesso'
             ],
             [
                 'id'    => 2,
                 'nome'  => 'Parcial'
             ],
             [
                 'id'    => 3,
                 'nome'  => 'Erro'
             ],
         ];

         $this->table('testes_tipos')->insert($tipos)->save();
         $this->table('testes_resultados')->insert($resultados)->save();
     }

     public function down()
     {
         $this->execute('DELETE FROM testes_tipos');
         $this->execute('DELETE FROM testes_resultados');
     }
}
