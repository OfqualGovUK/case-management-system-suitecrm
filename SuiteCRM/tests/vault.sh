#!/bin/bash
az login --identity --client-id "$VAULT_CLIENT_ID"
az keyvault secret set --vault-name "suitecrm-dev-keyvault" --name "TestVar" --value "TEST"