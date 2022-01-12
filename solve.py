
for x in range(10, 25):
	if x in [11,14,17,18,19]:
		continue
	#s=f"docker tag oswap_level_{x} registry.digitalocean.com/test-cyberlabs/oswap-level-{x}"
	#print(s)
	t=f"docker push registry.digitalocean.com/test-cyberlabs/oswap-level-{x}"
	print(t)