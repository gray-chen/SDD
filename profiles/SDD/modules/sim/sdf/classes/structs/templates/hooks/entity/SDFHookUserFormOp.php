
abstract class $SDF$HookUserFormOp extends SDFHookEntityFormOp {

    protected function createTask($name) {
        $path = "$sdf$/classes/hooks/entity/users/tasks";
        switch ($name) {
            case '';
                break;

            default:
                return null;
        }
    }
}
