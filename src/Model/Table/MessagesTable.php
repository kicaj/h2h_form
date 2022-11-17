<?php
declare(strict_types=1);

namespace App\Model\Table;

use App\Model\Entity\Message;
use Cake\Datasource\EntityInterface;
use Cake\Datasource\ResultSetInterface;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Messages Model
 *
 * @method Message newEmptyEntity()
 * @method Message newEntity(array $data, array $options = [])
 * @method Message patchEntity(EntityInterface $entity, array $data, array $options = [])
 * @method Message[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method Message|false save(EntityInterface $entity, $options = [])
 * @method Message saveOrFail(EntityInterface $entity, $options = [])
 * @method Message[]|ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method Message[]|ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method Message[]|ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method Message[]|ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MessagesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('messages');
        $this->setPrimaryKey('id');
        $this->setDisplayField('subject');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param Validator $validator Validator instance.
     * @return Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('subject')
            ->maxLength('subject', 200)
            ->requirePresence('subject', 'create')
            ->notEmptyString('subject');

        $validator
            ->scalar('content')
            ->requirePresence('content', 'create')
            ->notEmptyString('content');

        $validator
            ->boolean('agreement_1')
            ->requirePresence('agreement_1', 'create')
            ->equals('agreement_1', true);

        $validator
            ->boolean('agreement_2')
            ->notEmptyString('agreement_2');

        return $validator;
    }
}
